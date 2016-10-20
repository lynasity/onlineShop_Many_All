

    // style initail
    (function(){
        var baseURL = 'http://www.test.manyhong.cn/';
        // subnav
        var nav  = document.getElementById('nav');
        var links = nav.getElementsByTagName('li');
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




        // edit form submit
        window.addEventListener('submit',function(event){
            var editForm = document.getElementById('editForm');
            var formdata = new FormData(editForm);
            console.log(formdata);
            if(event.target == editForm) {
                event.preventDefault();
                fetch(baseURL + 'products',{
                    method: 'POST',
                    body: formdata
                }).then(function(response){
                    return response.text();
                }).then(function(err,body){
                    if(!true){
                        var success = document.getElementById('alertSuccess');
                        success.classList.add('alert-in');
                        var t = setTimeout(function(){
                            success.classList.remove('alert-in');
                            editForm.reset()
                        },1500)
                    }else {
                        var fail = document.getElementById('alertDanger');
                        fail.classList.add('alert-in');
                        var t = setTimeout(function(){
                            fail.classList.remove('alert-in');
                            editForm.reset()
                        },1500)
                    }
                })
            }
        })
    })()
