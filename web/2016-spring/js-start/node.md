# Meet Node.js

## Intro

```
$ cat some.js
console.log('hi');
$ node some.js
hi
$ node
> console.log('hi')
hi
undefined
>
```

Difference?
- Less: window, Web APIs
- More: global, ...... See [Node.js Documentation](https://nodejs.org/api/).
- Syntax: ES6 (incomplete)

## Install

[NVM](https://github.com/creationix/nvm) / Just [download](https://nodejs.org/)...

(Note the long evolution story behind ls-remote...)

## NPM

(See [NPM](http://npmjs.com/).)

Install: It comes with Node. Still, we can update to the latest:
```
$ npm install --global npm  # == 'npm i -g npm'
```

Just downloaded a package (by git clone or whatever):
```
$ npm install   # install in `./node_modules`
```

Initialize a package:
```
$ npm init      # initialize a `./package.json`
```

Install one package: (see also difference between -S, -D, ...)
```
$ npm i [--global|-g|--save|-S|--save-dev|-D] some-package
```

Try out one package in a REPL, using replem:
```
$ npm i -g replem
$ replem chalk:c
> console.log(c.red('Hello') + c.bgCyan.yellow('★ ') + 'World!')
```

## Charm of NPM Packages

- CLI? [meow](https://www.npmjs.com/package/meow), [commander](https://www.npmjs.com/package/commander), ...
- REPL? [Vorpal](https://www.npmjs.com/package/vorpal).
- Desktop App? [Electron](http://electron.atom.io/) (see also [Awesome Electron](https://github.com/sindresorhus/awesome-electron)), ...
- Mad Science, Functional Programming, Hardware, Web Frameworks, ......
- More? Go for [Awesome Node.js](https://github.com/sindresorhus/awesome-nodejs)!
