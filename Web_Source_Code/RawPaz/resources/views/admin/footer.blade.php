</div>
    </div>



    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{asset('assets/js/jquery-2.1.0.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
    <script src="{{asset('assets/js/animate.js')}}"></script>
    <script src="{{asset('assets/js/videopopup.js')}}"></script>
        <script src="{{asset('assets/js/dash_custom.js')}}"></script>
    <script>
$(".mobile_view_btn").click(function(){
  $(".left__sidebar").toggleClass("open_bar");
});
        $(function () {
            $('#vidBox').VideoPopUp({
                backgroundColor: "#17212a",
                opener: "video1",
                maxweight: "640",
                idvideo: "v1"
            });
        });

        $('.slot_select label input').click(function () {

            $(this).parents('.slot_list_sect .slot_select').addClass('selected')

        });

$(".list-certific .add_btn").click(function () {
 $(".About_vetting .list-certific").append(
'<li><div class="frm_grp"><label for="">upload certification(if)</label><input type="text" placeholder="https://facebook.com/lesile" class="form-control"><div class="upload_vetti cerf_icon"> <label for="upload_file"><input type="file" id="upload_file"> upload</label></div></div></li>'
 )
});


$(document).ready(function() {

var select = $('select[multiple]');
var options = select.find('option');

var div = $('<div />').addClass('selectMultiple');
var active = $('<div />');
var list = $('<ul />');
var placeholder = select.data('placeholder');

var span = $('<span />').text(placeholder).appendTo(active);

options.each(function() {
    var text = $(this).text();
    if($(this).is(':selected')) {
        active.append($('<a />').html('<em>' + text + '</em><i></i>'));
        span.addClass('hide');
    } else {
        list.append($('<li />').html(text));
    }
});

active.append($('<div />').addClass('arrow'));
div.append(active).append(list);

select.wrap(div);

$(document).on('click', '.selectMultiple ul li', function(e) {
    var select = $(this).parent().parent();
    var li = $(this);
    if(!select.hasClass('clicked')) {
        select.addClass('clicked');
        li.prev().addClass('beforeRemove');
        li.next().addClass('afterRemove');
        li.addClass('remove');
        var a = $('<a />').addClass('notShown').html('<em>' + li.text() + '</em><i></i>').hide().appendTo(select.children('div'));
        a.slideDown(400, function() {
            setTimeout(function() {
                a.addClass('shown');
                select.children('div').children('span').addClass('hide');
                select.find('option:contains(' + li.text() + ')').prop('selected', true);
            }, 500);
        });
        setTimeout(function() {
            if(li.prev().is(':last-child')) {
                li.prev().removeClass('beforeRemove');
            }
            if(li.next().is(':first-child')) {
                li.next().removeClass('afterRemove');
            }
            setTimeout(function() {
                li.prev().removeClass('beforeRemove');
                li.next().removeClass('afterRemove');
            }, 200);

            li.slideUp(400, function() {
                li.remove();
                select.removeClass('clicked');
            });
        }, 600);
    }
});

$(document).on('click', '.selectMultiple > div a', function(e) {
    var select = $(this).parent().parent();
    var self = $(this);
    self.removeClass().addClass('remove');
    select.addClass('open');
    setTimeout(function() {
        self.addClass('disappear');
        setTimeout(function() {
            self.animate({
                width: 0,
                height: 0,
                padding: 0,
                margin: 0
            }, 300, function() {
                var li = $('<li />').text(self.children('em').text()).addClass('notShown').appendTo(select.find('ul'));
                li.slideDown(400, function() {
                    li.addClass('show');
                    setTimeout(function() {
                        select.find('option:contains(' + self.children('em').text() + ')').prop('selected', false);
                        if(!select.find('option:selected').length) {
                            select.children('div').children('span').removeClass('hide');
                        }
                        li.removeClass();
                    }, 400);
                });
                self.remove();
            })
        }, 300);
    }, 400);
});

$(document).on('click', '.selectMultiple > div .arrow, .selectMultiple > div span', function(e) {
    $(this).parent().parent().toggleClass('open');
});

});
    </script>
    @livewireScripts
    @yield('scripts')

</body>

</html>