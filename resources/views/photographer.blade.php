<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
	body{ background-image: linear-gradient(#5c80ad, #9a5946); background-repeat: no-repeat; background-size: cover; }
	.wrapper{ padding: 20px 200px;}
	.margin-bottom-md{margin-bottom:20px;}
	.margin-bottom-xs{margin-bottom:5px;}
	.thumbnail{background: white; padding: 0px 0px; border:0px;}
	.photographer-info{ padding: 10px; }
	.caption{ padding: 5px 30px;}
</style>
</head>
<body>
	<div class="row wrapper" id="list">
		<div class="col-xs-12 margin-bottom-md">
			<div class="row thumbnail photographer-info">
				<div class="col-xs-2">
					<img class="img-circle img-responsive" :src="result.profile_picture">
				</div>
				<div class="col-xs-6">
					<h1> @{{result.name}} </h1>
					<h4>Bio</h4>
					<p>
						@{{result.bio}}
					</p>
				</div>
				<div class="col-xs-4">
					<h4>Phone</h4>
					<p class="text-danger">
						@{{result.phone}}
					</p>
					<h4>Email</h4>
					<p class="text-danger">
						@{{result.email}}
					</p>
				</div>
			</div>
		</div>
		<div v-for="alb in result.album" class="col-sm-4 col-xs-6 margin-bottom-md">
			<div class="thumbnail">
				<img class="img-responsive" :src="alb.img"/>
				<div class="caption">
					<div class="row">
						<div class="col-xs-12 margin-bottom-xs">
						@{{alb.description}}
						</div>
						<div class="col-xs-6">
							heart Icon
						</div>
						<div class="col-xs-6 text-right">
							@{{alb.date}}
						</div>
					</div>
				</div>
			<div>
		</div>
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
<script>
new Vue({
	el: '#list',
	data:{
		result:{},
	},	
	mounted: function(){
		var self= this;
		$.ajax({
			url: "/photographer/album",
			method:'get',
			dataType: 'json',
			success: function(result){
				self.result = result;
			}
		});
	},
});

</script>
</body>
</html>