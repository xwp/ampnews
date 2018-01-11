/* eslint-disable no-console */

const fs = require( 'fs' );
const CleanCSS = require( 'clean-css' );
const watch = require( 'node-watch' );
const files = [];

function handleError( error ) {
	if ( error ) {
		console.log( error );
		process.exit();
	}
}

for ( let file of fs.readdirSync( './' ) ) {
	if ( /.html$/.test( file ) ) {
		files.push( file );
	}
}

// Watchs for changes to style.css and injects those styles into the HTML.
watch( './style.css', { recursive: true }, function( evt, name ) {
	console.log( `\nInjected minified ${name} into:` );

	fs.readFile( './style.css', 'utf8', function ( error, data ) {
		handleError( error );

		var output = new CleanCSS().minify( data );

		for ( let file of files ) {
			fs.readFile( `./${ file }`, 'utf8', function ( error, data ) {
				handleError( error );

				var html = data.replace( /<style amp-custom>(.*)<\/style>/g, `<style amp-custom>${ output.styles }</style>` );

				fs.writeFile( `./${ file }`, html, 'utf8', function ( error ) {
					console.log( `- ${ file }` );

					handleError( error );
				});
			});
		}
	});
});
