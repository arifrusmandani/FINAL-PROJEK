			<aside class="col-md-3 sidebar">
				<div class="widget widget_stats">
					<h3 class="widget_title">Stats All</h3>
					<div class="ul_list ul_list-icon-ok">
						<ul>
							<?php $ask = App\Pertanyaan::all();
							 	  $count_ask = count($ask);
							 	  $jawaban = App\Jawaban::all();
							 	  $count_jawaban = count($jawaban);
							?>
							<li><i class="icon-question-sign"></i>Questions ( <span>{{$count_ask}}</span> )</li>
							<li><i class="icon-comment"></i>Answers ( <span>{{$count_jawaban}}</span> )</li>
						</ul>
					</div>
				</div>
				
				
				<div class="widget widget_tag_cloud">
					<h3 class="widget_title">Tags</h3>
					<?php $tags = App\Tag::all();?>
					@foreach($tags as $tag)
					<a href="#">{{$tag->tag_name}}</a>
					@endforeach
				</div>
				
				<div class="widget">
					<?php 
						$asks = App\Pertanyaan::orderByDesc('created_at')->take(5)->get();
					?>
					<h3 class="widget_title">Recent Questions</h3>
					<ul class="related-posts">
						@foreach($asks as $ask)
						<li class="related-item">
							<h3><a href="#">{{$ask->judul}}</a></h3>
							<p>{{substr($ask->isi,0,60)}}...</p>
							<div class="clear"></div><span>{{$ask->created_at->format('d, M Y')}}</span>
						</li>
						@endforeach
					</ul>
				</div>
				
			</aside><!-- End sidebar -->