

    // style initail
    (function(){
        // subnav
        var nav  = document.getElementById('nav');
        var links = nav.getElementsByTagName('li');
        console.log(links[0]);
        links[0].classList.add('acitve-class')

        var addActiveClass = function (){
            for(var i = 0; i < links.length; i++){
                links[i].classList.remove('acitve-class');
            }
            this.classList.add('acitve-class')
        }
        for(var i = 0; i < links.length; i++){
            links[i].onclick = addActiveClass;
        }

    })()
