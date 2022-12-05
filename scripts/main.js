requirejs.config({
    baseUrl: 'lib',
    paths: {
        app: '.'
    }
});

// Start loading the main app file. Put all of
// your application logic in there.
requirejs(['app/main']);