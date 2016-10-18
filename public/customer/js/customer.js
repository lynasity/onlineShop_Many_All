(function($){
    $('document').ready(function() {
        $('#signupForm').submit(function(event){
            var $fields = $('#signupForm input[type="text"]').each(function(){
                if(this.val() === ''){
                    event.preventDefault();
                    alert('请填写完整');
                    return false;
                }
            });
        })

        $('#signupForm #pwd').change(function(){
            if($(this).val() !== ''){
                $(this).siblings('span').addClass('fa fa-check-circle-o icon-success');
            }
        })

        $('#signupForm #pwdRepeat').change(function(event){
            var pwd = $('#signupForm #pwd').val();
                if($(this).val() == pwd) {
                    $(this).siblings('span').removeClass()
                    $(this).siblings('span').addClass('fa fa-check-circle-o icon-success')
                }else{
                    $(this).siblings('span').removeClass()
                    $(this).siblings('span').addClass('fa fa-times-circle-o icon-failed')
                }
        })





        // img-slider
        var clickNum = 0;
        var per = parseInt($("#sliderView li").eq(0).css('width'));
        // 不使用width()是因为他减去了padding

        $('#right').click(function(){
            if($('#sliderView li').length > 4 ) {
                if(clickNum + 4 < $('#sliderView li').length){
                    clickNum++;
                    $('#sliderView ul').css('left','-' + clickNum * per + 'px');
                }
            }
        })


        $('#left').click(function(){
            if($('#sliderView li').length > 4 ) {
                if(clickNum > 0){
                    clickNum--;
                    $('#sliderView ul').css('left','-' + clickNum * per + 'px');
                }
            }
        })

        $('#sliderView li').mouseenter(function(event) {
            var url = $(this).children('img').attr('src');
            $('#bigImg').css('background-image','url(' + url + ')');
        });




        // 毛玻璃
        $('#adminUsername').change(function(){
            $.post('', function(data, textStatus, xhr) {
                if(true){
                    var src = $('#face img').attr('src');
                    $('#overlay').css('background-image','url('+ src +')')
                }
            });

        })



        var showing = false;

        //　首页全部商品列表
        $('.dd').on('mouseenter','.item' ,function(event) {
            var index = $(this).data('index');
            $(this).addClass('hover')
            $('.sub-items div').each(function(index, el) {
                $(el).addClass('hidden');
            });
            $('.sub-items div').eq(index - 1).removeClass('hidden');
        });

        $('.sub-items').on('mouseleave', '.sub', function(event) {
            $(this).addClass('hidden');
            $('.dd .item').each(function(index, el) {
                $(el).removeClass('hover');
            });
        });

        $('.dd').on('mouseleave','.item',function(){
            var t = null;
            clearTimeout(t)
            var self = this;
            t = setTimeout(function(){
                if(showing == false) {
                    $(self).removeClass('hover');
                    var index = $(self).data('index');
                    $('.sub-items .sub').eq(index - 1).addClass('hidden')
                }
                showing = false;
            },50)
        })
        $('.sub-items').on('mouseenter',function(event) {
                showing = true;
        });

        // $('.dd .item').on('mouseleave',function(event) {
        //     if($('.sub-items').showing !== true) {
        // });


        //　首页大轮播
        function createBtn(){
            var $imgs = $('#indexBigSlider img');
            for(var i = 0; i < $imgs.length;i++){
                var span = $('<span>'+ (i+1) +'</span>');
                $('#indexBigSlider .btn-control').append(span)
            }
            $("#indexBigSlider .btn-control span").eq(0).addClass('active');
        }
        createBtn()

        var order = true;
        // 正向
        var index = 0;
        var $imgs = $('#indexBigSlider img');
        var $btns = $('#indexBigSlider .btn-control span');
        var t = null;


        function sliderInit(){
            play();
            count();
        }


        function autoPlay(){
            t = setInterval(sliderInit,3000);
        }

        function stopPlay(){
            clearInterval(t);
        }
        autoPlay()

        $btns.on('mouseenter', function(event) {
            stopPlay();
        });

        $btns.on('mouseleave', function(event) {
            autoPlay();
        });


        $('#indexBigSlider .dir-control').on('mouseleave', 'div', function(event) {
            autoPlay();
        })
        $('#indexBigSlider .dir-control').on('mouseenter', 'div', function(event) {
            stopPlay();
        });

        function play(){
            var moveLeft = '-'+index*$imgs.eq(0).width()+'px';
            $('#indexBigSlider ul').css('left',moveLeft);
            $btns.each(function(index, el) {
                    $(el).removeClass('active')
            });
            $btns.eq(index).addClass('active');
        }


        function count(){
            if(index >= $imgs.length -1) {
                order = false;
            }else if(index <= 0) {
                order = true;
            }
            order?index++:index--;
        }

        $('#indexBigSlider .left').on('click',prev)
        $('#indexBigSlider .right').on('click',next)

        function prev() {
            index--;
            if(index<0) {
                index=4;
            }
            play();
        }

        function next() {
            index++;
            if(index >= $imgs.length) {
                index=0
            }
            play();
        }

        $('#indexBigSlider .btn-control span').each(function(i, el) {
            $(el).on('click', function(event) {
                index = i;
                play();
            });
        });

        function manual() {

        }

        function initial(){
            // 初始化 detail/imgslider
            var per = parseInt($("#sliderView li").eq(0).css('width'));
            var w = $("#sliderView li").length * per;
            $('#sliderView ul').width(w);

            //初始化首页大轮播
            var indexPer = parseInt($('#indexBigSlider img').eq(0).css('width'));

            var indexW = indexPer*$('#indexBigSlider img').length;
            $('#indexBigSlider ul').width(indexW)

        }

        initial();





        //end
    });

}
)(jQuery)
