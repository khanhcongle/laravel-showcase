## Plugins for Visual Studio Code

code --install-extension aliariff.auto-add-brackets
code --install-extension amiralizadeh9480.laravel-extra-intellisense
code --install-extension apollographql.vscode-apollo
code --install-extension austenc.laravel-blade-spacer
code --install-extension bradlc.vscode-tailwindcss
code --install-extension Chad.solarized-light-operator-theme
code --install-extension christian-kohler.npm-intellisense
code --install-extension christian-kohler.path-intellisense
code --install-extension codingyu.laravel-goto-view
code --install-extension CoenraadS.bracket-pair-colorizer
code --install-extension dacoto.laravel-easy-blade-snippets
code --install-extension dsznajder.es7-react-js-snippets
code --install-extension Equinusocio.vsc-material-theme
code --install-extension equinusocio.vsc-material-theme-icons
code --install-extension felixfbecker.php-intellisense
code --install-extension formulahendry.auto-close-tag
code --install-extension hollowtree.vue-snippets
code --install-extension kokororin.vscode-phpfmt
code --install-extension KTamas.laravel-blade
code --install-extension leizongmin.node-module-intellisense
code --install-extension marabesi.php-import-checker
code --install-extension MehediDracula.php-namespace-resolver
code --install-extension neilbrayfield.php-docblocker
code --install-extension octref.vetur
code --install-extension onecentlin.laravel-blade
code --install-extension phproberto.vscode-php-getters-setters
code --install-extension PKief.material-icon-theme
code --install-extension ryannaddy.laravel-artisan
code --install-extension steoates.autoimport
code --install-extension vincaslt.highlight-matching-tag
code --install-extension wix.vscode-import-cost
code --install-extension xabikos.JavaScriptSnippets

## Intellij Tailwind CSS autocomplete
When the CSS file that Tailwind generates gets too big, PHPStorm will stop indexing it. If the file isn't indexed, autocompletion won't work for CSS classes. This problem is common when adding extra variants, or when using the @tailwindcss/ui plugin.

- If your CSS classes aren't being autocompleted, try opening the CSS file that Tailwind generates in your public/css/ directory. You should see a yellow banner that says: "The file size (4.03 MB) exceeds configured limit (2.56 MB). Code insight features are not available". If you see this yellow banner, you can fix the problem by doing the following:
    + In the main menu toolbar, click Help > Edit Custom Properties...
    + Add the following line: idea.max.intellisense.filesize=6000
    + Restart PHPStorm

