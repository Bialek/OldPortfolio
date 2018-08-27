var myFullpage = new fullpage('#fullpage', {
    anchors: ['home', 'about', 'projects', 'psd', 'games', 'orders', 'contact'],
    sectionsColor: ['', '#1BBC9B', '#7E8F7C', '#FF8700', '#A3CB38', '#A205C3', '#0887BE'],
    navigation: true,
    navigationPosition: 'right',
    navigationTooltips: ['Home', 'About me', 'Projects', 'Psd to Html', 'Games', 'Paid orders', 'Contact'],
    responsiveWidth: 900,
    afterResponsive: function(isResponsive){

    }

});