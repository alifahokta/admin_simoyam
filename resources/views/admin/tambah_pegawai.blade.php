<form method="POST" action="{{ url('ternak') }}" enctype="multipart/form-data">
        @csrf 
    <div class="row clearfix">
        <div class="col-md-6">ID Ternak</div>
    
        <div class="col-md-6">
        <input class="form-control" type="text" name="id_ternak" > 
        @foreach($errors->get('id_ternak') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
        <div class="col-md-6">ID Pakan</div>
    
        <div class="col-md-6">
        <input class="form-control" type="text" name="id_pakan" > 
        @foreach($errors->get('id_ternak') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>
--
<div class="row clearfix">
        <div class="col-md-6">ID Admin</div>
    
        <div class="col-md-6">
        <input class="form-control" type="text" name="id_admin" > 
        @foreach($errors->get('id_admin') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Jumlah</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="jumlah" >
        @foreach($errors->get('jumlah') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Jenis Ternak</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="jenis_ternak" >
        @foreach($errors->get('jenis_ternak') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tanggal Masuk</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_masuk" >
        @foreach($errors->get('tanggal_masuk') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-6">Tanggal Keluar</div>
    
    <div class="col-md-6">
        <input class="form-control"  type="text" name="tanggal_keluar"  >
        @foreach($errors->get('tanggal_keluar') as $msg)
            <p class="text-danger">{{ $msg }}</p>
        @endforeach
    </div>
</div>


<button type="submit" class="btn btn-primary">SIMPAN</button>
    </form>
