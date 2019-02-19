@extends('layout.app')
@section('content')
<div class="get">
    <div class="am-g">
        <div class="am-u-lg-12">
            <h1 class="get-title">It's Party Time!<br>Drink Up!</h1>

            <p>到时聚聚、聊聊程序</p>

            <p>
                <a href="issues_create.html" class="am-btn am-btn-default am-btn-secondary">发布新活动</a>
            </p>
        </div>
    </div>
</div>

<div class="detail">
    <div class="am-g am-container">
        <div class="am-u-lg-12">
            <h1 class="detail-h1">最新的活动</h1>
        </div>
    </div>
</div>

<div class="am-container">
    <div data-am-widget="list_news" class="am-list-news am-list-news-default">
        <!--列表标题-->
        <div class="am-list-news-bd">
            <ul class="am-list">
                
                @include('shared._issues_list')

            </ul>
        </div>
    </div>
</div>
@endsection