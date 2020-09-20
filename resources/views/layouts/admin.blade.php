

    @include('layouts.head')

    @include('layouts.page_header.admin')

    @include('layouts.sidebar.admin')

    @include('layouts.bottom')

<style>
    *{
        margin: 0;
        padding: 0;
    }
    body{
        background: rgb(240, 243, 245);
    }
    .content{
        padding: 50px;
    }
    .nav-wrapper{
        padding-right: 40px;
        padding-left: 40px;
    }
    .material-icons{
        color: rgb(12, 160, 160);
    }
    .aside{
        background: rgb(255, 255, 255);
        min-height: 100vh !important;
        width: 200px;
    }
    .aside ul a{
        padding: 10px;
        width: 100%;
        display: flex;
        transition: 0.4s;
    }
    .aside ul a:hover{
        background: rgb(10, 92, 74);
        color: white;
    }

    .avatar{
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .avatar>div{
            margin: 10px;
        }
        .avatar img{
            height: 40px;
            width: 40px;
            border-radius: 50%;
            border: 1px solid teal;
            box-shadow: 1px 1px 3px lightgrey;
        }
</style>