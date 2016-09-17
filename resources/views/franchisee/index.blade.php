<!-- Bakal diturunkan dari template-->

@extends('template')

@section('main')
	<div id='franchisee'>
    <!-- PRELOADER -->
    <img id="preloader" src="<?php public_path() ?>/images/preloader.gif" alt="" />
    <!-- //PRELOADER -->
    <div class="preloader_hide">
		<!-- PAGE -->
        <div id="page" class="single_page">
        
            <!-- HEADER -->
            <header>
                
                <!-- MENU BLOCK -->
                <div class="menu_block">
                
                    <!-- CONTAINER -->
                    <div class="container clearfix">
                        
                        <!-- LOGO -->
                        <div class="logo pull-left">
                            <a href="#" >
                            <span class="b1">F</span>
                            <span class="b1">R</span>
                            <span class="b2">I</span>
                            <span class="b2">E</span>
                            <span class="b3">N</span>
                            <span class="b3">D</span>
                            <span class="b4">C</span>
                            <span class="b4">H</span>
                            <span class="b4">I</span>
                            <span class="b5">S</span>
                            <span class="b5">E</span>
                            </a>
                        </div><!-- //LOGO -->
                        
                   
                       
                    </div><!-- //MENU BLOCK -->
                </div><!-- //CONTAINER -->
            </header><!-- //HEADER -->
            
            
            <!-- BLOG -->
        <section id="blog">
              <!-- BREADCRUMBS -->
        <section class="breadcrumbs_block clearfix parallax margbot50">
            <div class="container center">
                <h2><b>Daftar</b> Mitra</h2>
            </div>
        </section><!-- //BREADCRUMBS -->
            <!-- CONTAINER -->
            <div class="container">
            
           
		<?php if (!empty($franchiseeInput)):?>
			<table class="table margbot30">
				<thead>
					<tr>
						<th> Nama Mitra </th>
						<th> Alamat </th>
						<th> Kecamatan </th>
						<th> Kota </th>
						<th> Username </th>
						<th> Password </th>
						<th> Penjualan Tahu Hari Ini</th>
						<th> Stok Tahu</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach ($franchiseeInput as $item) : ?>
						<tr>
							<td> {{$item->nama}} </td>
							<td> {{$item->alamat}} </td>
							<td> {{$item->kecamatan}} </td>
							<td> {{$item->kota}} </td>
							<td> {{$item->username}} </td>
							<td> {{$item->password}} </td>
							<td> {{$item->jualtahu}} </td>
							<td> {{$item->stoktahu}} </td>
                            </tr>
                            <tr>
                            <td colspan="3">
                            </td>
                            <td>
								<div class="box-button">
									{{ link_to('franchisee/'.$item->id, 'Detail', ['class'=>'mitra_btn']) }} 	
								</div>
                                </td>
                                <td colspan="1">
								<div class="box-button">
									{{ link_to('franchisee/'.$item->id . '/edit', 'Ubah', ['class'=>'mitra_btn']) }} 
								</div>
                                </td>
                                <td colspan="3">
								<div class="box-button">
									{!! Form::open(['method' => 'DELETE', 'action' => ['FranchiseeController@delete', $item->id] ]) !!}

									{!! Form::submit('Hapus', ['class' => 'mitra_btn']) !!}

									{!! Form::close() !!}

								</div>	
                                </td>
                            </td>			
                         </tr>
					<?php endforeach ?>
				</tbody>
			</table>
		<?php else: ?>
			<p>There are no franchisee data</p>
		<?php endif ?>

		<div class="table-nav">
			<div class="jumlah-data">
					<h3>
						Jumlah mitra : {{$inputJumlah}}
					</h3>	
				</div>
			<div class="paging">
				{{ $franchiseeInput->links() }}
			</div>
		</div>

		<div class="tombol-nav margbot80">
			<div class="row">
                <div class="col-lg-5 col-md-5"></div>
                <div class="col-lg-4 col-md-4">
                    <a href="franchisee/create" class="contact_btn">
                        Tambah Mitra
                    </a>
                </div>
                <div class="col-lg-3 col-md-3"></div>
			</div>
		</div>
        
        </div><!-- //CONTAINER -->
        </section><!-- //BLOG -->
	</div><!-- PAGE -->
    
    <!-- FOOTER -->
    <footer>
            
        <!-- CONTAINER -->
        <div class="container">
            
            <!-- ROW -->
            <div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
                
                <div class="col-lg-4 col-md-4 col-sm-6 padbot30">
                    <h4><b>Featured</b> posts</h4>
                    <div class="recent_posts_small clearfix">
                        <div class="post_item_img_small">
                            <img src="<?php public_path() ?>/images/blog/1.jpg" alt="" />
                        </div>
                        <div class="post_item_content_small">
                            <a class="title" href="blog.html" >As we have developed a unique layout template</a>
                            <ul class="post_item_inf_small">
                                <li>10 January 2014</li>
                            </ul>
                        </div>
                    </div>
                    <div class="recent_posts_small clearfix">
                        <div class="post_item_img_small">
                            <img src="<?php public_path() ?>/images/blog/2.jpg" alt="" />
                        </div>
                        <div class="post_item_content_small">
                            <a class="title" href="blog.html" >How much is to develop a design for the game?</a>
                            <ul class="post_item_inf_small">
                                <li>14 January 2014</li>
                            </ul>
                        </div>
                    </div>
                    <div class="recent_posts_small clearfix">
                        <div class="post_item_img_small">
                            <img src="<?php public_path() ?>/images/blog/3.jpg" alt="" />
                        </div>
                        <div class="post_item_content_small">
                            <a class="title" href="blog.html" >How to pump designer</a>
                            <ul class="post_item_inf_small">
                                <li>21 December 2013</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
                    <h4><b>About</b> us</h4>
                    <p>We value people over profits, quality over quantity, and keeping it real. As such, we deliver an unmatched working relationship with our clients.</p>
                    <p>Our team is intentionally small, eclectic, and skilled; with our in-house expertise, we provide sharp and</p>
                    <ul class="social">
                        <li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
                        <li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
                        <li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
                        <li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>
                    </ul>
                </div>
                
                <div class="respond_clear"></div>
                
                <div class="col-lg-4 col-md-4 padbot30">
                    <h4><b>Contacts</b> Us</h4>
                    
                    <!-- CONTACT FORM -->
                    <div class="span9 contact_form">
                        <div id="note"></div>
                        <div id="fields">
                            <form id="contact-form-face" class="clearfix" action="#">
                                <input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
                                <textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
                                <input class="contact_btn" type="submit" value="Send message" />
                            </form>
                        </div>
                    </div><!-- //CONTACT FORM -->
                </div>
            </div><!-- //ROW -->
            <div class="row copyright">
                <div class="col-lg-12 text-center">
                
                 <p>FriendChise <i class="fa fa-heart"></i>, <a href="http://kuliah.informatika.org/" >Team Bakwan</a></p>
                </div>
            
            </div><!-- //ROW -->
        </div><!-- //CONTAINER -->
    </footer><!-- //FOOTER -->
    
    </div>
    </div>
@stop

@section('footer')
@stop

