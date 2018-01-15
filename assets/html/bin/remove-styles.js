/* eslint-disable no-console */

const fs = require( 'fs' );
const path = require( 'path' );
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

for ( let file of files ) {
	fs.readFile( `./${ file }`, 'utf8', function( e, data ) {
		handleError( e );

		var html = data.replace( /<style amp-custom>(.*)<\/style>/g, `<style amp-custom></style>` );

		fs.writeFile( `./${ file }`, html, 'utf8', function( e ) {
			handleError( e );
		} );
	} );
}
