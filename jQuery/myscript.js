$(document).ready(function () {
    $('#search-btn').click(function () {
        let temp = ''
        $.ajax({
            url: "catalog.json",
            dataType: "json"
        }).done(function (response) {
            response.map(items => {
                let countCat = 0;
                let countAuth = 0;
                if ($('#search-input').val() != '') {
                        (items.categories).forEach(function (data) {
                            (data.indexOf($('#search-input').val()) > -1) ? countCat++ : null
                        });
                        (items.authors).forEach(function (data) {
                            // console.log(data,$('#authors-adv-input').val(),data.indexOf($('#authors-adv-input').val()))
                            (data.indexOf($('#search-input').val()) > -1) ? countAuth++ : null
                        });
                }
                return ((countCat > 0 || countAuth > 0 || $('#search-input').val() == '') || items.title.indexOf($('#search-input').val()) > -1) ? temp += '<li class="columns"><img class="column is-1" src=' + items.thumbnailUrl + '><span class="column is-2">' + items.title + '</span><span class="column is-5 shortDes">' + items.shortDescription + '</span><span class="column is-1 authors">' + items.authors + '</span><span class="column is-1 publishDate">' + items.publishedDate.$date.split('T')[0] + '</span><span class="column is-1 status">' + items.status + '</span></li>\n' : null
            })
            $('#result-search').html(temp)
            $('#search-input').val('')
        });
    })
    $('#adv-search-btn').click(function () {
        let temp = ''
        $.ajax({
            url: "catalog.json",
            dataType: "json"
        }).done(function (response) {
            response.map(items => {
                let countCat = 0;
                let countAuth = 0;
                if ($('#catagories-adv-input').val() != '') {
                        (items.categories).forEach(function (data) {
                            (data.indexOf($('#categories-adv-input').val()) > -1) ? countCat++ : null
                        });
                }
                if ($('#authors-adv-input').val() != '') {
                        (items.authors).forEach(function (data) {
                            // console.log(data,$('#authors-adv-input').val(),data.indexOf($('#authors-adv-input').val()))
                            (data.indexOf($('#authors-adv-input').val()) > -1) ? countAuth++ : null
                        });
                }

                // console.log((countCat > -1 || $('#catagories-adv-input').val() == ''))
                // console.log(items.title.indexOf($('#title-adv-input').val()) > -1)
                // console.log(($('#date-adv-input').val() == items.publishedDate.$date.split('T')[0] || $('#date-adv-input').val() == ''))
                // console.log((countAuth > -1 || $('#authors-adv-input').val() == ''))

                return ((countCat > 0 || $('#catagories-adv-input').val() == '') && items.title.indexOf($('#title-adv-input').val()) > -1 && ($('#date-adv-input').val() == items.publishedDate.$date.split('T')[0] || $('#date-adv-input').val() == '') && (countAuth > 0 || $('#authors-adv-input').val() == '')) ? temp += '<li class="columns"><img class="column is-1" src=' + items.thumbnailUrl + '><span class="column is-2">' + items.title + '</span><span class="column is-5 shortDes">' + items.shortDescription + '</span><span class="column is-1 authors">' + items.authors + '</span><span class="column is-1 publishDate">' + items.publishedDate.$date.split('T')[0] + '</span><span class="column is-1 status">' + items.status + '</span></li>\n' : null
            })
            $('#result-search').html(temp)
            $('#catagories-adv-input').val('')
            $('#title-adv-input').val('')
            $('#authors-adv-input').val('')
        });
    })
    $('#adv-search').click(function () {
        $('.field').hide(500);
        $('#advance-search').show(500);
        $('#catagories-adv-input').val('')
        $('#title-adv-input').val('')
        $('#authors-adv-input').val('')
        $('#search-input').val('')
    })
    $('#simp-search').click(function () {
        $('#advance-search').hide(500);
        $('.field').show(500);
        $('#catagories-adv-input').val('')
        $('#title-adv-input').val('')
        $('#authors-adv-input').val('')
        $('#search-input').val('')
    })
}); 