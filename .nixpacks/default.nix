{ pkgs ? import <nixpkgs> {} }:

pkgs.php80.withExtensions (pe: with pe; [
  pdo_mysql
  # أضف أي امتدادات أخرى تحتاجها
]) // {
  composer = pkgs.php80Packages.composer;
  nodejs = pkgs.nodejs-18;
}