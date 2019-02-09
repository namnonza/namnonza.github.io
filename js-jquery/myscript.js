$(document).ready(function () {
    console.log('ready')
    $('#search-btn').click(function () {
        if ($('#search-input').val() === '') {
            $.ajax({
                url: "catalog.json",
                dataType: "json"
            }).done(function (response) {
                console.log(response)
                let temp = ''
                response.map((item, index) =>
                    temp += '<li key=' + index + '><img src=' + item.thumbnailUrl + ' height="200px" width="100px">' + item.title + '<span class="shortDes">' + item.shortDescription + '</span><span class="authors">' + item.authors + '</span><span class="publishDate">' + item.publishedDate.$date.split('T')[0] + '</span><span class="status">' + item.status + '</span></li></span>\n'
                )
                $('#result-search').html(temp)
            });
        } else {
            $.ajax({
                url: "catalog.json",
                dataType: "json"
            }).done(function (response) {
                console.log(response)
                let temp = ''
                response.filter((item, index) =>
                    temp += '<li key=' + index + '><img src=' + item.thumbnailUrl + ' height="200px" width="100px">' + item.title + '<span class="shortDes">' + item.shortDescription + '</span><span class="authors">' + item.authors + '</span><span class="publishDate">' + item.publishedDate.$date.split('T')[0] + '</span><span class="status">' + item.status + '</span></li></span>\n'
                )
                $('#result-search').html(temp)
            });
        }

    })

});