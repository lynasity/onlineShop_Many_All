

    // style initail
    (function()
    {
        var baseURL = 'http://www.test.manyhong.cn/';
        // subnav
        var nav  = document.getElementById('nav');
        var links = nav.getElementsByTagName('li');
        links[0].classList.add('acitve-class')

        var addActiveClass = function ()
        {
            for(var i = 0; i < links.length; i++)
            {
                links[i].classList.remove('acitve-class');
            }
            this.classList.add('acitve-class')
        }

        for(var i = 0; i < links.length; i++)
        {
            links[i].onclick = addActiveClass;
        }




        window.addEventListener('submit',function(event)
        {

            // product product form edit
            var editProduct = document.getElementById('editProduct');
            var formdata = new FormData(editProduct);

            if(event.target === editProduct)
            {
                event.preventDefault();
                fetch(baseURL + 'products',
                {
                    method: 'POST',
                    body: formdata
                }).then(function(response)
                {
                    return response.text();
                }).then(function(err,body)
                {
                    if(!true)
                    {
                        var success = document.getElementById('alertSuccess');
                        success.classList.add('alert-in');
                        var t = setTimeout(function()
                        {
                            success.classList.remove('alert-in');
                            editProduct.reset();
                            clearTiemout(t);
                        },1500)
                    }else {
                        var fail = document.getElementById('alertDanger');
                        fail.classList.add('alert-in');
                        var t = setTimeout(function()
                        {
                            fail.classList.remove('alert-in');
                            editProduct.reset()
                            clearTiemout(t);
                        },1500)
                    }
                })
            }
            // end edit product


            //add cate form
            var addCate = document.getElementById('addCate');
            if(event.target === addCate) {
                event.preventDefault();
                var cateList = document.getElementById('cateList');
                var addCateForm = new FormData(addCate);
                fetch(baseURL + 'cates',{
                    method: 'POST',
                    body: addCateForm
                }).then(function(response){
                    return response.text();
                }).then(function(body){
                    cateList.innerHTML = body;
                })
                // action="{{url('cates')
            }

        })


        window.addEventListener('click',function(event){
            // cate pagination
            var catePagiLinks = document.querySelectorAll('.cate .pagination a');
            // if(event.target === catePagiLinks[])
            for(var i = 0; i < catePagiLinks.length; i++) {
                if(event.target === catePagiLinks[i]) {
                    event.preventDefault();
                    var href = event.target.getAttribute('href');
                    fetch(href).then(function(response){
                        return response.text();
                    }).then(function(body){
                        view.innerHTML = body;
                    })
                }
            }


            var productDeleteBtns = document.querySelectorAll('#productTable .deleteBtn')
            var productModifyBtns = document.querySelectorAll('#productTable .modifyBtn')
            for(var x = 0;x < productModifyBtns.length;x++) {
                if(event.target === productModifyBtns[x]) {
                    event.preventDefault();
                }
            }

            for(var y = 0;y < productDeleteBtns.length;y++) {
                if(event.target === productDeleteBtns[y]) {
                    event.preventDefault();

                }
            }




            var productPagiLinks = document.querySelectorAll('.product .pagination a');
            for(var p = 0; p < productPagiLinks.length; p++) {

                if(event.target === productPagiLinks[p]) {
                    event.preventDefault();
                    var href = productPagiLinks[p].getAttribute('href');
                    fetch(href).then(function(response){
                        return response.text();
                    }).then(function(body){
                        view.innerHTML = body;
                    })
                }

            }
        })

    }())
