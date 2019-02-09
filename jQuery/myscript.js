$(document).ready(function () {
    console.log('ready')
    $('#search-btn').click(function () {
            console.log('searching')
            let temp = ''
            $.ajax({
                url: "catalog.json",
                dataType: "json"
            }).done(function (response) {
                response.map((item, index) =>
                       ((item.title).indexOf($('#search-input').val())==-1)? null : temp += '<li key=' + index + '><img src=' + item.thumbnailUrl + '>' + item.title + '<span class="shortDes">' + item.shortDescription + '</span><span class="authors">' + item.authors + '</span><span class="publishDate">' + item.publishedDate.$date.split('T')[0] + '</span><span class="status">' + item.status + '</span></li></span>\n'
                )
                $('#result-search').html(temp)
            });
    })
    $('#adv-search').click(function(){
        $('.field').hide(500);
        $('#advance-search').show(500);
    })
}); 