# Editor

## Problems

- encoding
- style
- hint
- large code base
- extension

## Solution

### gitattributes

Git can handle file encoding and line ending, use config file to override gloabl config.

[Offical Doc](https://git-scm.com/docs/gitattributes)

- encoding, UTF-8
- end of line (crlf) , `sh` files can only use `LF`

Example:

````
# Force sh file use lf
*.sh text eol=lf
Makefile text eol=lf
*.bat text eol=crlf
````

### editorconfig

A editor independent style config. Some editor has it built in, most has plugin for it.

[Offical Site](http://editorconfig.org/)

- encoding
- end of line (crlf)
- indent
- tab

Example

````
root = true

[*]
insert_final_newline = true
indent_style = space
charset = utf-8

[*.{sh,js,php,css,scss}]
end_of_line = lf
charset = utf-8

[*.{js,json,yml}]
indent_size = 2

[*.php]
indent_size = 4

[*.{md,markdown}]
indent_size = 4

[Makefile]
indent_style = tab
````

### lint tools

Lint tools can change your style, some can auto fix minor problems. You can also config git hooks to
force running lint tools before commit. Some git host like [phabricator](http://phabricator.org/) also
support running it on server.

- Javascript [eslint](http://eslint.org/)
- PHP [phpcs](https://github.com/squizlabs/PHP_CodeSniffer)

### IDE

Integrated Development Environment. Editor + Code runner + Debugger .... etc.

#### Jetbrains

- [official site](https://www.jetbrains.com/)

**[Student can have free liciense](https://www.jetbrains.com/student/)**

- [WebStorm](https://www.jetbrains.com/webstorm) Front end
- **[PhpStorm](https://www.jetbrains.com/phpstorm/)** Front end + PHP
- [IDEA](https://www.jetbrains.com/idea) Front end + Java + Scala + Groovy
- [PyCharm](https://www.jetbrains.com/pycharm) Front end + Python

Also have plugin for [Golang](https://github.com/go-lang-plugin-org/go-lang-idea-plugin)

### How hint works

Hint is the editor show a list of words based on what you typed. It is also known as
autocomplete, [intellisense](https://msdn.microsoft.com/en-us/library/hcw1s69b.aspx).

#### Text only

The editor show hint based on the words in this file only.

TODO: image

Example

- Atom
- Sublmie
- VSCode

#### Analysis result

The editor (most time IDE) analysis all the code used in current project, including your code, library code,
standard library code. This is also called index, similar to what search engine does.

TODO: image

Example

- Eclipse
- JetBrains IDE
- Visual Studio

However, with plugins, a lot editors can also show hint based on analysis result, like VSCode works perfectly
with C# if you have Visual Studio installed.

## Recommended editors

- [Atom](https://atom.io/)
- [Sublime](https://www.sublimetext.com/)
- [VSCode](https://code.visualstudio.com/)

## Not recommended

They are well known editors, but since using them require a lot of config, it's better to use editor or IDE that comes
out with a lot of default settings and plugins. You can try if you think you can handle them.

- Vim
- Emacs

## Outdated editor and IDE

If you want to waste time, try one of the following. If you want to waste other people's time, recommend those to them.

- Dreamweaver
