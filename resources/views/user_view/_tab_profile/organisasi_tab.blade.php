<div class="tab-content">
        <div class="tab-pane fade active show" id="myprofile">
            
        <div class="container">
                <div class="row">
                	<div class="col-lg-4 mb-4">
                		<nav class="responsive-tab">
		                    <ul class="nav nav-tabs uk-list">
								<li class="nav-item"><a class="active" href="#account" data-toggle="tab">Profile Umum</a></li>
								<li class="nav-item"><a class="" href="#khusus" data-toggle="tab">Profile Khusus</a></li>
		                    </ul>
		                </nav>
                	</div>
                    <div class="col-lg-8">
                        <div class="main-wraper">
                            <div class="tab-content" id="components-nav">

                            <div class="tab-pane active fade show"  id="account">
                                <form>
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputEmail4">Nama Perusahaan</label>
											<input type="text" class="form-control">
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-md-12">
											<label for="inputEmail4">Tanggal Berdiri</label>
											<input type="date" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress">Alamat Kantor</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									</div>
							
									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputCity">Provinsi</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Kota</label>
											<select id="inputState" class="form-control">
												<option selected>Choose...</option>
												<option>...</option>
											</select>
										</div>
										
										
									</div>

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputCity">Kecamatan</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Jalan</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										
										
									</div>

									<div class="form-group">
										<label for="inputAddress">Alamat Email Kantor</label>
										<input type="text" class="form-control">
									</div>

									<div class="form-group">
										<label for="inputAddress">Website Kantor</label>
										<input type="text" class="form-control">
									</div>

									<div class="form-row">
										<div class="form-group col-md-6">
											<label for="inputCity">Nama Depan PIC</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
										<div class="form-group col-md-6">
											<label for="inputState">Nama Belakang PIC</label>
											<input type="text" class="form-control" id="inputCity">
										</div>
									</div>


									<div class="form-group">
										<label for="inputAddress">Email PIC</label>
										<input type="text" class="form-control">
									</div>


									<div class="form-group">
										<label for="inputAddress">Link Profile Kerjateknik</label>
										<input type="text" class="form-control">
									</div>

									<a href="#" title="" class="button primary circle mt-5">Save Changes</a>
									
									</form>
                            </div>


                            <div class="tab-pane fade"  id="khusus">
                            
                                @if(Auth::user()->organisasiprofile->tipe == 'association')
                                    @include('user_view.partial_profile_khusus.accosiation')
                                @elseif(Auth::user()->organisasiprofile->tipe == 'kampus_universitas')
                                    @include('user_view.partial_profile_khusus.kampus_universitas')
                                @elseif(Auth::user()->organisasiprofile->tipe == 'badan_usaha')
                                    @include('user_view.partial_profile_khusus.badan_usaha')
                                @elseif(Auth::user()->organisasiprofile->tipe == 'lembaga_pemerintahan')
                                    @include('user_view.partial_profile_khusus.lembaga_pemerintah')
                                @endif
                              
                            </div>
                                
                               
                                
                             
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        

            
            
        </div>

        <div class="tab-pane fade" id="followers">
            <div class="main-wraper">
                <h4 class="main-title">Followers (2)</h4>
                <div class="row col-xs-6 merged-10">
                    
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="members">
                            <figure><img alt="" src="https://media.licdn.com/dms/image/C5603AQGpocl-5u3z_A/profile-displayphoto-shrink_200_200/0/1643075698903?e=1709769600&v=beta&t=RSIRcQejwYiEC4RvPWbNzN5QhpuEAihnoW3x4t3Xo8w"></figure>
                            <span>Erick Syarif</span>
                            <ins>Members Account</ins>
                           
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6">
                        <div class="members">
                            <figure><img alt="" src="https://media.licdn.com/dms/image/C5603AQGpocl-5u3z_A/profile-displayphoto-shrink_200_200/0/1643075698903?e=1709769600&v=beta&t=RSIRcQejwYiEC4RvPWbNzN5QhpuEAihnoW3x4t3Xo8w"></figure>
                            <span>Mariyanto</span>
                            <ins>Profisional Account</ins>
                           
                        </div>
                    </div>
                
                    
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="jobs">
        <div class="main-wraper">
            <h4 class="main-title">Job List</h4>
            <div class="dept-info">
                <ul>
                    <li>
                        <h6>Mechanical Project Enginer</h6>
                        <span>Appplicant <i>65</i></span>
                    </li>
                    
                    
                    
                    
                
                </ul>
            </div>

        </div>
        </div>
</div>