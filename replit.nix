{ pkgs }: {
	deps = [
   pkgs.sqlite.bin
   pkgs.php80Packages.composer
   pkgs.gnupg
   pkgs.systemd
   pkgs.docker
   pkgs.wget
		pkgs.php82
	];
}