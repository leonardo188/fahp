@extends('layouts.master')

@section('content')
    <div class="p-4 w-full">
        <div class="text-3xl font-bold">
            Perbandingan Berpasangan Alternatif terhadap masing-masing Kriteria
        </div>


        <div class="text-2xl font-bold mt-8">
            Penilaian Kinerja Karyawan terhadap Absensi
        </div>
        <div class="flex row mt-4">
            <div>
                <div>Matrik Perbandingan Berpasangan terhadap Kriteria Absensi</div>
                <div class="table w-[600px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A1</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A2</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A3</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="ml-20">
                <div>Rata-Rata Geometrik dan Bobot Fuzzy terhadap Kriteria Absensi</div>
                <div class="table w-[900px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">Bobot</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">(Mi)</div>
                            <div class="table-cell text-center ">(Ni)</div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center py-2"></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">0,264</div>
                            <div class="table-cell text-center ">0,651</div>
                            <div class="table-cell text-center ">1,418</div>
                            <div class="table-cell text-center ">2,333</div>
                            <div class="table-cell text-center ">0,616</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,096</div>
                            <div class="table-cell text-center ">0,223</div>
                            <div class="table-cell text-center ">0,514</div>
                            <div class="table-cell text-center ">0,832</div>
                            <div class="table-cell text-center ">0,220</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,063</div>
                            <div class="table-cell text-center ">0,127</div>
                            <div class="table-cell text-center ">0,433</div>
                            <div class="table-cell text-center ">0,623</div>
                            <div class="table-cell text-center ">0,164</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">Total</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">3,788</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex row mt-4">
            <div>
                <div>Matrik Perbandingan Berpasangan terhadap Prestasi Kerja</div>
                <div class="table w-[600px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A1</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A2</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A3</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="ml-20">
                <div>Rata-Rata Geometrik dan Bobot Fuzzy terhadap Prestasi Kerja</div>
                <div class="table w-[900px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">Bobot</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">(Mi)</div>
                            <div class="table-cell text-center ">(Ni)</div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center py-2"></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">0,155</div>
                            <div class="table-cell text-center ">0,313</div>
                            <div class="table-cell text-center ">0,829</div>
                            <div class="table-cell text-center ">1,297</div>
                            <div class="table-cell text-center ">0,342</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,096</div>
                            <div class="table-cell text-center ">0,223</div>
                            <div class="table-cell text-center ">0,514</div>
                            <div class="table-cell text-center ">0,832</div>
                            <div class="table-cell text-center ">0,220</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,138</div>
                            <div class="table-cell text-center ">0,264</div>
                            <div class="table-cell text-center ">0,575</div>
                            <div class="table-cell text-center ">0,977</div>
                            <div class="table-cell text-center ">0,258</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">Total</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">3,106</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex row mt-4">
            <div>
                <div>Matrik Perbandingan Berpasangan terhadap Kerja Sama</div>
                <div class="table w-[600px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A1</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A2</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A3</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center "><input type="text" class='w-12 bg-gray-400' /></div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="ml-20">
                <div>Rata-Rata Geometrik dan Bobot Fuzzy terhadap Kerja Sama</div>
                <div class="table w-[900px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">Bobot</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">(Mi)</div>
                            <div class="table-cell text-center ">(Ni)</div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center py-2"></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">0,238</div>
                            <div class="table-cell text-center ">0,430</div>
                            <div class="table-cell text-center ">0,829</div>
                            <div class="table-cell text-center ">1,498</div>
                            <div class="table-cell text-center ">0,395</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,313</div>
                            <div class="table-cell text-center ">0,549</div>
                            <div class="table-cell text-center ">1,019</div>
                            <div class="table-cell text-center ">1,881</div>
                            <div class="table-cell text-center ">0,497</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,202</div>
                            <div class="table-cell text-center ">0,304</div>
                            <div class="table-cell text-center ">0,575</div>
                            <div class="table-cell text-center ">1,081</div>
                            <div class="table-cell text-center ">0,285</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">Total</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">4,460</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex row mt-4">
            <div>
                <div>Matrik Perbandingan Berpasangan terhadap Kriteria Absensi</div>
                <div class="table w-[600px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A1</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A2</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A3</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                            <div class="table-cell text-center ">7</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,143</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1,000</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1,000</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="ml-20">
                <div>Rata-Rata Geometrik dan Bobot Fuzzy terhadap Kriteria Absensi</div>
                <div class="table w-[900px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">Bobot</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">(Mi)</div>
                            <div class="table-cell text-center ">(Ni)</div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center py-2"></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">0,264</div>
                            <div class="table-cell text-center ">0,651</div>
                            <div class="table-cell text-center ">1,418</div>
                            <div class="table-cell text-center ">2,333</div>
                            <div class="table-cell text-center ">0,616</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,096</div>
                            <div class="table-cell text-center ">0,223</div>
                            <div class="table-cell text-center ">0,514</div>
                            <div class="table-cell text-center ">0,832</div>
                            <div class="table-cell text-center ">0,220</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,063</div>
                            <div class="table-cell text-center ">0,127</div>
                            <div class="table-cell text-center ">0,433</div>
                            <div class="table-cell text-center ">0,623</div>
                            <div class="table-cell text-center ">0,164</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">Total</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">3,788</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex row mt-4">
            <div>
                <div>Matrik Perbandingan Berpasangan terhadap Kriteria Absensi</div>
                <div class="table w-[600px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A1</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A2</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A3</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                            <div class="table-cell text-center ">7</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,143</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1,000</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1,000</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="ml-20">
                <div>Rata-Rata Geometrik dan Bobot Fuzzy terhadap Kriteria Absensi</div>
                <div class="table w-[900px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">Bobot</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">(Mi)</div>
                            <div class="table-cell text-center ">(Ni)</div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center py-2"></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">0,264</div>
                            <div class="table-cell text-center ">0,651</div>
                            <div class="table-cell text-center ">1,418</div>
                            <div class="table-cell text-center ">2,333</div>
                            <div class="table-cell text-center ">0,616</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,096</div>
                            <div class="table-cell text-center ">0,223</div>
                            <div class="table-cell text-center ">0,514</div>
                            <div class="table-cell text-center ">0,832</div>
                            <div class="table-cell text-center ">0,220</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,063</div>
                            <div class="table-cell text-center ">0,127</div>
                            <div class="table-cell text-center ">0,433</div>
                            <div class="table-cell text-center ">0,623</div>
                            <div class="table-cell text-center ">0,164</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">Total</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">3,788</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex row mt-4">
            <div>
                <div>Matrik Perbandingan Berpasangan terhadap Kriteria Absensi</div>
                <div class="table w-[600px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A1</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A2</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">A3</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                            <div class="table-cell text-center ">7</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,143</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">3</div>
                            <div class="table-cell text-center ">5</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1,000</div>
                            <div class="table-cell text-center ">0,200</div>
                            <div class="table-cell text-center ">0,333</div>
                            <div class="table-cell text-center ">1,000</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                            <div class="table-cell text-center ">1</div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="ml-20">
                <div>Rata-Rata Geometrik dan Bobot Fuzzy terhadap Kriteria Absensi</div>
                <div class="table w-[900px] border mt-4">
                    <div class="table-header-group ">
                        <div class="table-row">
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">Bobot</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">(Mi)</div>
                            <div class="table-cell text-center ">(Ni)</div>
                        </div>
                    </div>
                    <div class="table-row-group">
                        <div class="table-row">
                            <div class="table-cell text-center py-2"></div>
                            <div class="table-cell text-center ">l</div>
                            <div class="table-cell text-center ">m</div>
                            <div class="table-cell text-center ">n</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A1</div>
                            <div class="table-cell text-center ">0,264</div>
                            <div class="table-cell text-center ">0,651</div>
                            <div class="table-cell text-center ">1,418</div>
                            <div class="table-cell text-center ">2,333</div>
                            <div class="table-cell text-center ">0,616</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A2</div>
                            <div class="table-cell text-center ">0,096</div>
                            <div class="table-cell text-center ">0,223</div>
                            <div class="table-cell text-center ">0,514</div>
                            <div class="table-cell text-center ">0,832</div>
                            <div class="table-cell text-center ">0,220</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">A3</div>
                            <div class="table-cell text-center ">0,063</div>
                            <div class="table-cell text-center ">0,127</div>
                            <div class="table-cell text-center ">0,433</div>
                            <div class="table-cell text-center ">0,623</div>
                            <div class="table-cell text-center ">0,164</div>
                        </div>
                        <div class="table-row">
                            <div class="table-cell text-center py-2">Total</div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center "></div>
                            <div class="table-cell text-center ">3,788</div>
                            <div class="table-cell text-center "></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
