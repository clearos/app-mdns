
Name: app-mdns
Epoch: 1
Version: 1.6.5
Release: 1%{dist}
Summary: Multicast DNS Server
License: GPLv3
Group: ClearOS/Apps
Source: %{name}-%{version}.tar.gz
Buildarch: noarch
Requires: %{name}-core = 1:%{version}-%{release}
Requires: app-base
Requires: app-network

%description
The multicast DNS server is used for advertising services offered on this server to your networks. The control for the individual services are located within that individual service. This app controls the broadcast service itself.

%package core
Summary: Multicast DNS Server - Core
License: LGPLv3
Group: ClearOS/Libraries
Requires: app-base-core
Requires: avahi >= 0.6.25

%description core
The multicast DNS server is used for advertising services offered on this server to your networks. The control for the individual services are located within that individual service. This app controls the broadcast service itself.

This package provides the core API and libraries.

%prep
%setup -q
%build

%install
mkdir -p -m 755 %{buildroot}/usr/clearos/apps/mdns
cp -r * %{buildroot}/usr/clearos/apps/mdns/

install -D -m 0644 packaging/mdns.php %{buildroot}/var/clearos/base/daemon/mdns.php

%post
logger -p local6.notice -t installer 'app-mdns - installing'

%post core
logger -p local6.notice -t installer 'app-mdns-core - installing'

if [ $1 -eq 1 ]; then
    [ -x /usr/clearos/apps/mdns/deploy/install ] && /usr/clearos/apps/mdns/deploy/install
fi

[ -x /usr/clearos/apps/mdns/deploy/upgrade ] && /usr/clearos/apps/mdns/deploy/upgrade

exit 0

%preun
if [ $1 -eq 0 ]; then
    logger -p local6.notice -t installer 'app-mdns - uninstalling'
fi

%preun core
if [ $1 -eq 0 ]; then
    logger -p local6.notice -t installer 'app-mdns-core - uninstalling'
    [ -x /usr/clearos/apps/mdns/deploy/uninstall ] && /usr/clearos/apps/mdns/deploy/uninstall
fi

exit 0

%files
%defattr(-,root,root)
/usr/clearos/apps/mdns/controllers
/usr/clearos/apps/mdns/htdocs
/usr/clearos/apps/mdns/views

%files core
%defattr(-,root,root)
%exclude /usr/clearos/apps/mdns/packaging
%dir /usr/clearos/apps/mdns
/usr/clearos/apps/mdns/deploy
/usr/clearos/apps/mdns/language
/var/clearos/base/daemon/mdns.php
