@extends('layouts/app')
@section('title', ' PPDB SMK')
@section('content')
<form action="/insert" method="post">
	{{ csrf_field() }}
	<div class="row">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header">
					<div class="card-title">Form Daftar</div>
				</div>
				<div class="card-body">
					{{-- 1.Siswa --}}
					<b style="font-size: 15px;">1.Form Siswa</b>
					<div class="form-group">
						<label for="exampleFormControlFile1">Foto Siswa 3x4 :</label>
						<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
					</div>
					<div class="form-group">
						<label for="namalengkap">Nama Lengkap :</label>
						<input type="text" name="nama_lengkap" class="form-control" id="namalengkap" placeholder="Enter fullname...">
					</div>
					<div class="form-group">
						<label for="namapanggil">Nama Panggilan :</label>
						<input type="text" name="nama_panggilan" class="form-control" id="namapanggil" placeholder="Enter name...">
					</div>
					<div class="form-check">
						<label>Jenis Kelamin :</label><br />
						<label class="form-radio-label">
							<input class="form-radio-input" type="radio" name="jk" value="laki" checked="">
							<span class="form-radio-sign">Laki - Laki</span>
						</label>
						<label class="form-radio-label ml-3">
							<input class="form-radio-input" type="radio" name="jk" value="perempuan">
							<span class="form-radio-sign">Perempuan</span>
						</label>
					</div>
					<div class="form-group">
						<label for="tp">Tempat Lahir :</label>
						<input type="text" name="tempat_lahir" class="form-control" id="tp" placeholder="Tempat Lahir...">
					</div>
					<div class="form-group">
						<label for="tp2">Tanggal Lahir :</label>
						<input type="date" name="tanggal_lahir" class="form-control" id="tp2" placeholder="Tanggal Lahir...">
					</div>
					<div class="form-group">
						<label for="exampleFormControlSelect1">Kewarganegaraan / Agama :</label>
						<select name="agama" class="form-control" id="exampleFormControlSelect1">
							<option value="islam">islam</option>
							<option value="kristen">kristen</option>
							<option value="katolik">katolik</option>
							<option value="buddha">buddha</option>
							<option value="konghucu">konghucu</option>
						</select>
					</div>
					<div class="form-group">
						<label for="ank">Anak Ke- :</label>
						<input type="number" name="anak_ke" class="form-control" id="ank" placeholder="anak ke berapa...">
					</div>
					<div class="form-group">
						<b>Jumlah Saudara :</b><br>
						<label for="inlineinput" class="col-md-3 col-form-label">Kandung :</label>
						<div class="col-md-9 p-0">
							<input type="number" name="jml_saudara" class="form-control input-full" id="inlineinput" placeholder="Enter Input">
						</div>
						<label for="inlineinput2" class="col-md-3 col-form-label">Tiri :</label>
						<div class="col-md-9 p-0">
							<input type="number" name="jml_saudara" class="form-control input-full" id="inlineinput2" placeholder="Enter Input">
						</div>
						<label for="inlineinput3" class="col-md-3 col-form-label">Angkat :</label>
						<div class="col-md-9 p-0">
							<input type="number" name="jml_saudara" class="form-control input-full" id="inlineinput3" placeholder="Enter Input">
						</div>
					</div>

					{{-- 2. Keterangan tmpt tinggal --}}
					<b style="margin-left: 10px;font-size: 15px;">2.Keterangan Tempat Tinggal</b>
					<div class="form-group">
						<label for="almtrm">Alamat Rumah :</label>
						<input type="text" name="alamat" class="form-control" id="almtrm" placeholder="alamat(rt/rw)">
					</div>
					<div class="form-group">
						<label for="klrhn">Kelurahan :</label>
						<input type="text" name="kelurahan" class="form-control" id="klrhn" placeholder="...">
					</div>
					<div class="form-group">
						<label for="kcmtn">Kecamatan :</label>
						<input type="text" name="kecamatan" class="form-control" id="kcmtn" placeholder="...">
					</div>
					<div class="form-group">
						<label for="kbkt">Kota/Kabupaten :</label>
						<input type="text" name="kota" class="form-control" id="kbkt" placeholder="...">
					</div>
					<div class="form-group">
						<label for="prov">Provinsi :</label>
						<input type="text" name="provinsi" class="form-control" id="prov" placeholder="...">
					</div>
					<div class="form-group">
						<label for="kdps">Kode Pos :</label>
						<input type="text" name="kd_pos" class="form-control" id="kdps" placeholder="...">
					</div>

					{{-- 4.Data OrangTua/Wali --}}
					<b style="margin-left: 10px;font-size: 15px;">4.Data OrangTua/Wali</b><br>
					<b style="margin-left: 13px;font-size: 13px;">A. Data Ayah</b>
					{{-- Data Ayah --}}
					<div class="form-group">
						<label for="nmyh">Nama Ayah :</label>
						<input type="text" name="nama_ayah" class="form-control" id="nmyh" placeholder="masih ada/almarhum">
					</div>
					<div class="form-group">
						<label for="tlhr">Tempat Lahir :</label>
						<input type="text" name="tempatlahir_ayah" class="form-control" id="tlhr" placeholder="Tempat Lahir...">
					</div>
					<div class="form-group">
						<label for="tlhr2">Tanggal Lahir :</label>
						<input type="date" name="tglahir_ayah" class="form-control" id="tlhr2" placeholder="Tanggal Lahir...">
					</div>
					<!--  -->
					<b style="margin-left: 13px;font-size: 13px;">B. Data Ibu</b>
					{{-- Data Ibu --}}
					<div class="form-group">
						<label for="nmibu">Nama Ibu :</label>
						<input type="text" name="nama_ibu" class="form-control" id="nmibu" placeholder="masih ada/almarhum">
					</div>
					<div class="form-group">
						<label for="thli">Tempat Lahir :</label>
						<input type="text" name="tempatlahir_ibu" class="form-control" id="thli" placeholder="Tempat Lahir...">
					</div>

					<b style="margin-left: 13px;font-size: 13px;">C. Data Wali</b>

					{{-- Nilai - Nilai --}}
					<b style="margin-left: 10px;font-size: 15px;">5.Nilai Raport</b><br><br>
					{{-- 1.Pai --}}
					<b style="margin-left: 13px;font-size: 13px;">A. Mapel PAI</b>
					<div class="form-group">
						<label for="paihiji" class="col-md-3 col-form-label">Total Nilai :</label>
						<div class="col-md-9 p-0">
							<input type="number" name="nilai_paikelasatu_satu" class="form-control input-full" id="paihiji" placeholder="Enter Input">
						</div>
					</div>

					{{-- 2.Bahasa indonesia --}}
					<b style="margin-left: 13px;font-size: 13px;">B. Mapel B.Indo</b>
					<div class="form-group">
						<label for="indohiji" class="col-md-3 col-form-label">Total Nilai:</label>
						<div class="col-md-9 p-0">
							<input type="number" name="nilai_indokelasatu_satu" class="form-control input-full" id="indohiji" placeholder="Enter Input">
						</div>
					</div>

					{{-- 3.Bahasa inggris --}}
					<b style="margin-left: 13px;font-size: 13px;">C. Mapel B.Inggris</b>
					<div class="form-group">
						<label for="inggrishiji" class="col-md-3 col-form-label">Total Nilai :</label>
						<div class="col-md-9 p-0">
							<input type="number" name="nilai_inggriskelasatu_satu" class="form-control input-full" id="inggrishiji" placeholder="Enter Input">
						</div>
					</div>

					{{-- 4.Matematika --}}
					<b style="margin-left: 13px;font-size: 13px;">D. Mapel Matematika</b>
					<div class="form-group">
						<label for="mtkhiji" class="col-md-3 col-form-label">Total Nilai:</label>
						<div class="col-md-9 p-0">
							<input type="number" name="nilai_mtkkelasatu_satu" class="form-control input-full" id="mtkhiji" placeholder="Enter Input">
						</div>
					</div>
					{{-- 5.ipa --}}
					<b style="margin-left: 13px;font-size: 13px;">E. Mapel IPA</b>
					<div class="form-group">
						<label for="ipahiji" class="col-md-3 col-form-label">Total Nilai :</label>
						<div class="col-md-9 p-0">
							<input type="number" name="nilai_ipakelasatu_satu" class="form-control input-full" id="ipahiji" placeholder="Enter Input">
						</div>
					</div>
					{{-- 6.ips --}}
					<b style="margin-left: 13px;font-size: 13px;">F. Mapel IPS</b>
					<div class="form-group">
						<label for="ipshiji" class="col-md-3 col-form-label">Total Nilai:</label>
						<div class="col-md-9 p-0">
							<input type="number" name="nilai_ipskelasatu_satu" class="form-control input-full" id="ipshiji" placeholder="Enter Input">
						</div>
					</div>
					<div class="form-group">
						<label for="prsts">Prestasi Yang Pernah Diraih :</label>
						<input type="text" name="prestasi" class="form-control" id="prsts" placeholder="...">
					</div>
					<div class="card-action">
						<button class="btn btn-success">Submit</button>
						<button class="btn btn-danger">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
@endsection