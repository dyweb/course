# Dependencies

## For Node

```javascript
const chalk = require('chalk');
const someFancyWork = require('../some/fancy/work');
```

## In Browser

- No 'require'. So just make everything necessary global, then add 'script' tags.
- No 'require'. So let's make one.
  - Include a loader, define 'require' (or similiar things) there.
  - 'Compile' all files, rewrite 'require' stuff.
- Further:
  - [CommonJS](http://www.commonjs.org/),
    [AMD](https://github.com/amdjs/amdjs-api),
    [CMD](https://github.com/cmdjs/specification/blob/master/draft/module.md),
    [UMD](https://github.com/umdjs/umd);
  - [Webpack](https://webpack.github.io/) ([Advanced Frontend Optimization](https://sokra.github.io/slides/frontend-optimize)),
    [JSPM](http://jspm.io/),
    [rollup.js](http://rollupjs.org/),
    ......
  - [assets-bower-ci](https://github.com/at15/assets-bower-ci),
    [Tam](https://github.com/arrowrowe/tam).
