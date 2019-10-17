@extends('layouts.layoutindex')

@section('content')

	<div class="container">
		<div class="container-component">

        	<div class="pageWrap">
                <div class="panel panel-primary">
		    <div class="panel-heading text-center">
<h3 class="modal-title text-center primecolor">{{ config('defaultcfg.defaultcfg.M3DC_SEMINAR_TITLE') }}</h3>
</div>
                    <div class="panel-body">
			<pre class="list-unstyled ">{{ config('defaultcfg.defaultcfg.VIEW_INFO_DATE') }}
{{ config('defaultcfg.defaultcfg.VIEW_INFO_TITLE') }}
{{ config('defaultcfg.defaultcfg.VIEW_INFO_PROF') }}</pre>

                        <div style="text-align:center;">
                        	<!-- iframe コード入力 -->
				<iframe src="/img/m3dc_logo.png" style="width:489px;height:527px;"></iframe>
                        </div>

                    </div>
                    <div class="panel-footer">
                        <p class="glyphicon glyphicon-warning-sign text-danger">　PCでご視聴の場合はVPNを切断しご覧ください</p>
                    </div>
                </div>

                <div class="col-sm-12 contactBox">
                	<a target="_blank" href="{{ config('defaultcfg.defaultcfg.INQUIRY_URL') }}">接続に関する技術的な質問等ございましたら、こちらからお問い合わせ下さい。</a>
            	</div>
	        </div>

        </div>
    </div>

@endsection
