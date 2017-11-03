//はてなブックマークではてブ数を取得
function fetch_hatebu_count(url, selector) {
  jQuery.ajax({
    url:'//b.hatena.ne.jp/entry.count?callback=?',
    //url:'//api.b.st-hatena.com/entry.count?callback=?',
    dataType:'jsonp',
    timeout: 10000, //10sec
    data:{
      url:url
    }
  }).done(function(res){
    jQuery( selector ).text( res || 0 );
  }).fail(function(){
    jQuery( selector ).html('<span class="fa fa-spinner fa-spin"></span>');
  });
}

//Push7で購読者数を取得
function fetch_push7_count(app_no, selector) {
  url = 'https://api.push7.jp/api/v1/'+app_no+'/head';
  jQuery.ajax({
    url:url,
    dataType:'json',
    timeout: 10000, //10sec
    data:{
      url:url
    }
  }).done(function(res){
    jQuery( selector ).text( res.subscribers || 0 );
  }).fail(function(){
    jQuery( selector ).html('<span class="fa fa-exclamation"></span>');
  });
}

//count.jsoonからTwitterのツイート数を取得
function fetch_twitter_count_from_count_jsoon(url, selector) {
  jQuery.ajax({
    url:'//jsoon.digitiminimi.com/twitter/count.json',
    dataType:'jsonp',
    timeout: 10000, //10sec
    data:{
      url:url
  },
  success:function(res){
    jQuery( selector ).html( res.count || 0 );
  },
  error:function(){
    jQuery( selector ).html('error');
  }
  });
}

//Facebookのシェア数を取得
function fetch_facebook_count(url, selector) {
  jQuery.ajax({
    url:'https://graph.facebook.com/',
    dataType:'jsonp',
    timeout: 10000, //10sec
    data:{ id:url }
  }).done(function(res){
    //console.log(res);
    if ( res.share && res.share.share_count ) {
      jQuery( selector ).text( res.share.share_count );
    } else {
      jQuery( selector ).text( 0 );
    }
  }).fail(function(){
    jQuery( selector ).html('<span class="fa fa-exclamation"></span>');
  });
}
