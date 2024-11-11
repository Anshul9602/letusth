<style>
    .al {
        margin-left: 10%;
        margin-right: 10%;
    }

    .pj {
        text-align: justify;
        font-size: 14px;
    }

    .h {
        margin-top: 10px;
        text-transform: capitalize;
        color: black;
        text-align: justify;
    }

    .hb {
        margin-top: 60px;
        text-transform: uppercase;
        color: black;

    }

    h4::after {
        content: "";
        position: initial;
        display: block;
        width: 60px;
        height: 4px;
        margin-top: 10px;
        background: black;
        bottom: 0;
        left: calc(50% - 20px);
    }

    h5::after {
        content: "";
        position: relative;
        display: block;
        width: 60px;
        height: 4px;
        margin-top: 10px;
        background: black;
        bottom: 0;
        left: calc(50% - 20px);
    }

    .photos-list ul,
    .videos-list ul {
        margin: 0px;
        padding: 0px;
    }

    .photos-list ul li,
    .videos-list ul li {
        list-style: none;
        float: left;
        width: 18%;
        margin-left: 25px;
        position: relative;
    }

    .photos-list ul li p {
        margin-left: 25px;
        color: #fff;
    }

    .photos-list ul li img,
    .videos-list ul li img {
        float: left;
        height: 155px;
        width: 100%;
        margin-left: 25px;
        position: relative;
        border-radius: 10px;
        cursor: pointer;
    }

    .photos-list ul li span,
    .videos-list ul li span {
        position: absolute;
        bottom: 0;
        right: 0;
        background: rgba(0, 0, 0, .5);
        padding: 5px 10px;
        cursor: pointer;
    }

    .photos-list ul li span svg,
    .videos-list ul li span svg {
        color: #fff;
    }

    .hidden {
        display: none;
    }
</style>

<div class="baneer1 text-center">
    <img src="assets/img/Client1.jpg" width="100%" alt="">
</div>







<script>
    $(document).ready(function () {
        const maxLoad = 7

        function showEl(el) {
            return el.removeClass('hidden')
        }

        $('li').each(function (index) {
            index < maxLoad ?
                showEl($(this)) : null
        })

        $('#loadAllImages').click(function () {
            $('li').each(function () {
                showEl($(this))
            })
        })
    });


    // active link 

    $(document).ready(function () {
        $('.clients').addClass(" active");
    })

</script>