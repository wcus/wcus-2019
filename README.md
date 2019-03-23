WordCamp US 2019 Theme
======================

This is the theme used for the WordCamp US website. The compiled CSS is loaded by the us.wordcamp.org site, while the child theme itself can be used in a local development environment.

To work on the site:

First, set up a local install using the [wordpress-meta-environment](https://github.com/WordPress/meta-environment), and follow [this guide](https://ryelle.codes/2016/07/local-development-for-wordcamp-websites/) to set up a new wordcamp site.

_Alternately_, you can set up a normal WordPress site & use [the wcus-themes repo](https://github.com/wcus/wcus-themes) to get the WordCamp environment.

1. Add this repo to your themes directory, activate it, and set up the site
2. Create a new branch
3. Make your changes in the Sass as needed, see "CSS Structure" for where things live.
4. You can run `npm run watch`, which will rebuild the CSS as you're working, and also works with [livereload](https://chrome.google.com/webstore/detail/livereload/jnihajbhpnppcggbcgedagnkighmdlei) (alternately you can run `npm run build` to do a one-time build of the CSS)
5. Commit your changes, including the compiled CSS
6. Create a PR for your change

## Development

Get started by running `npm install`. This will install the gulp, sass, autoprefixer, stylelint, and livereload dependencies.

We use stylelint with [the WordPress Coding Standards for scss](https://github.com/WordPress-Coding-Standards/stylelint-config-wordpress) enforced (with [minor exceptions](.stylelintrc.json)). With PostCSS + autoprefixer, you don't need to worry about vendor prefixes. Lastly, you can use [a livereload browser extension](http://livereload.com/extensions/) to avoid manual reloads. If you don't want to use a browser extension, turn on `SCRIPT_DEBUG` to always load the latest CSS file.

The scripts available to you are:

- `npm run build`: Run the linter and build the CSS file
- `npm run lint`: Run the linter by itself
- `npm run watch`: Run the linter and build the CSS file, watching scss files for changes. Also turns on the livereload server.

If you need to, you can also run `npx gulp css` (if you're on npm 5.2+), which will compile the CSS, skipping the linter. Please don't do this if you can avoid it 🙂

## CSS Structure

TBD 🎨
