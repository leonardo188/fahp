@extends('layouts.master')

@section('content')
    <div class="h-[88vh] p-4 w-full">
        <div class="w-full flex justify-between items-center">
            <div class="text-3xl font-bold">
                Data Karyawan
            </div>
            <button class="border rounded-lg items-center justify-center p-2 text-sm">
                Tambah Karyawan
            </button>
        </div>

        <div class="table w-[800px] border mt-4 ">
            <div class="table-header-group ">
                <div class="table-row">
                    <div class="table-cell text-left ">Id</div>
                    <div class="table-cell text-left ">Nama</div>
                    <div class="table-cell text-left ">Jenis Kelamin</div>
                    <div class="table-cell text-left ">Jabatan</div>
                    <div class="table-cell text-left ">Mulai Bekerja</div>
                    <div class="table-cell text-left w-10"></div>
                </div>
            </div>
            <div class="table-row-group ">
                <div class="table-row">
                    <div class="table-cell text-left ">S-001</div>
                    <div class="table-cell ">Wiratama Adi Wibawa</div>
                    <div class="table-cell ">Laki-laki</div>
                    <div class="table-cell ">Staff</div>
                    <div class="table-cell ">2018</div>
                    <div class="table-cell "><button><div><div class="rounded-full bg-black h-1 w-1 mb-1"></div><div class="mb-1 rounded-full bg-black h-1 w-1"></div><div class="rounded-full bg-black h-1 w-1"></div></div></button></div>

                </div>
                <div class="table-row">
                    <div class="table-cell text-left ">S-002</div>
                    <div class="table-cell ">Danang Prasetyo</div>
                    <div class="table-cell ">Laki-laki</div>
                    <div class="table-cell ">Staff</div>
                    <div class="table-cell ">2015</div>
                    <div class="table-cell "><button><div><div class="rounded-full bg-black h-1 w-1 mb-1"></div><div class="mb-1 rounded-full bg-black h-1 w-1"></div><div class="rounded-full bg-black h-1 w-1"></div></div></button></div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-left ">S-003</div>
                    <div class="table-cell ">Fadil Arafat</div>
                    <div class="table-cell ">Laki-laki</div>
                    <div class="table-cell ">Staff</div>
                    <div class="table-cell ">2019</div>
                    <div class="table-cell "><button><div><div class="rounded-full bg-black h-1 w-1 mb-1"></div><div class="mb-1 rounded-full bg-black h-1 w-1"></div><div class="rounded-full bg-black h-1 w-1"></div></div></button></div>
                </div>
            </div>
        </div>
    </div>
@endsection
