{ pkgs ? import <nixpkgs> { } }:

let
  php = pkgs.php84.buildEnv {
    extensions = { enabled, all }:
      with all; [
        xdebug
        dom
        mbstring
        tokenizer
        xmlwriter
      ];
  };

in pkgs.mkShell {
  nativeBuildInputs = with pkgs; [ git php php.packages.composer ];

  shellHook = ''
    export XDEBUG_MODE=coverage
  '';
}
