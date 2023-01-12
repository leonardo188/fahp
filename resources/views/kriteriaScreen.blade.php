@extends('layouts.master')

@section('content')
    <div class=" p-4 w-full">
        <div class="text-3xl font-bold">
            Perbandingan Berpasangan Antar Kriteria
        </div>

        <div class="table w-[900px] border mt-4">
            <div class="table-header-group ">
                <div class="table-row">
                    <div class="table-cell text-center "></div>
                    <div class="table-cell text-center ">AB</div>
                    <div class="table-cell text-center ">PT</div>
                    <div class="table-cell text-center ">KS</div>
                    <div class="table-cell text-center ">KP</div>
                    <div class="table-cell text-center ">MK</div>
                    <div class="table-cell text-center ">PK</div>
                </div>
            </div>
            <div class="table-row-group">
                <div class="table-row">
                    <div class="table-cell text-center py-2">AB</div>
                    <div class="table-cell text-center ">1</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">PT</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center ">1</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">KS</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center ">1</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">KP</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center ">1</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">MK</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center ">1</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">PK</div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center "><input type="text" class='w-16 bg-gray-400' /></div>
                    <div class="table-cell text-center ">1</div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">Total</div>
                    <div class="table-cell text-center ">2,152</div>
                    <div class="table-cell text-center ">5,010</div>
                    <div class="table-cell text-center ">7,867</div>
                    <div class="table-cell text-center ">12,677</div>
                    <div class="table-cell text-center ">19,333</div>
                    <div class="table-cell text-center ">26</div>
                </div>
            </div>
        </div>

        <div class="text-2xl font-bold mt-8">Skala TFN</div>

        <div class="table w-[900px] border mt-4">
            <div class="table-header-group ">
                <div class="table-row">
                    <div class="table-cell text-center "></div>
                    <div class="table-cell text-center ">AB</div>
                    <div class="table-cell text-center ">PT</div>
                    <div class="table-cell text-center ">KS</div>
                    <div class="table-cell text-center ">KP</div>
                    <div class="table-cell text-center ">MK</div>
                    <div class="table-cell text-center ">PK</div>
                    <div class="table-cell text-center ">Eigen</div>
                </div>
            </div>
            <div class="table-row-group">
                <div class="table-row">
                    <div class="table-cell text-center py-2">AB</div>
                    <div class="table-cell text-center ">0,465</div>
                    <div class="table-cell text-center ">0,599</div>
                    <div class="table-cell text-center ">0,381</div>
                    <div class="table-cell text-center ">0,395</div>
                    <div class="table-cell text-center ">0,362</div>
                    <div class="table-cell text-center ">0,269</div>
                    <div class="table-cell text-center ">0,412</div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">PT</div>
                    <div class="table-cell text-center ">0,155</div>
                    <div class="table-cell text-center ">0,200</div>
                    <div class="table-cell text-center ">0,381</div>
                    <div class="table-cell text-center ">0,237</div>
                    <div class="table-cell text-center ">0,259</div>
                    <div class="table-cell text-center ">0,269</div>
                    <div class="table-cell text-center ">0,250</div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">KS</div>
                    <div class="table-cell text-center ">0,155</div>
                    <div class="table-cell text-center ">0,067</div>
                    <div class="table-cell text-center ">0,127</div>
                    <div class="table-cell text-center ">0,237</div>
                    <div class="table-cell text-center ">0,155</div>
                    <div class="table-cell text-center ">0,192</div>
                    <div class="table-cell text-center ">0,155</div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">KP</div>
                    <div class="table-cell text-center ">0,093</div>
                    <div class="table-cell text-center ">0,067</div>
                    <div class="table-cell text-center ">0,042</div>
                    <div class="table-cell text-center ">0,079</div>
                    <div class="table-cell text-center ">0,155</div>
                    <div class="table-cell text-center ">0,155</div>
                    <div class="table-cell text-center ">0,092</div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">MK</div>
                    <div class="table-cell text-center ">0,066</div>
                    <div class="table-cell text-center ">0,040</div>
                    <div class="table-cell text-center ">0,042</div>
                    <div class="table-cell text-center ">0,026</div>
                    <div class="table-cell text-center ">0,052</div>
                    <div class="table-cell text-center ">0,115</div>
                    <div class="table-cell text-center ">0,057</div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">PK</div>
                    <div class="table-cell text-center ">0,066</div>
                    <div class="table-cell text-center ">0,029</div>
                    <div class="table-cell text-center ">0,025</div>
                    <div class="table-cell text-center ">0,026</div>
                    <div class="table-cell text-center ">0,017</div>
                    <div class="table-cell text-center ">0,038</div>
                    <div class="table-cell text-center ">0,034</div>
                </div>
                <div class="table-row">
                    <div class="table-cell text-center py-2">Total</div>
                    <div class="table-cell text-center "></div>
                    <div class="table-cell text-center "></div>
                    <div class="table-cell text-center "></div>
                    <div class="table-cell text-center "></div>
                    <div class="table-cell text-center "></div>
                    <div class="table-cell text-center "></div>
                    <div class="table-cell text-center ">1</div>
                </div>
            </div>
        </div>

        <div class="mt-4">
            Nilai ⋋ Maks = 6,505
        </div>
        <div class="mt-4">
            Nilai CI = 0,101
        </div>
        <div class="mt-4">
            Nilai CR = 0,081
        </div>

        <div class="text-2xl font-bold mt-[2000px]">Bobot Rata-Rata Kriteria dan Normalisasi</div>

        <div>
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
                        <div class="table-cell text-center py-2">AB</div>
                        <div class="table-cell text-center ">0,153</div>
                        <div class="table-cell text-center ">0,420</div>
                        <div class="table-cell text-center ">1,009</div>
                        <div class="table-cell text-center ">1,582</div>
                        <div class="table-cell text-center ">0,384</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center py-2">PT</div>
                        <div class="table-cell text-center ">0,089</div>
                        <div class="table-cell text-center ">0,253</div>
                        <div class="table-cell text-center ">0,700</div>
                        <div class="table-cell text-center ">1,042</div>
                        <div class="table-cell text-center ">0,253</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center py-2">KS</div>
                        <div class="table-cell text-center ">0,052</div>
                        <div class="table-cell text-center ">0,152</div>
                        <div class="table-cell text-center ">0,485</div>
                        <div class="table-cell text-center ">0,690</div>
                        <div class="table-cell text-center ">0,167</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center py-2">KP</div>
                        <div class="table-cell text-center ">0,031</div>
                        <div class="table-cell text-center ">0,089</div>
                        <div class="table-cell text-center ">0,292</div>
                        <div class="table-cell text-center ">0,413</div>
                        <div class="table-cell text-center ">0,100</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center py-2">MK</div>
                        <div class="table-cell text-center ">0,022</div>
                        <div class="table-cell text-center ">0,054</div>
                        <div class="table-cell text-center ">0,171</div>
                        <div class="table-cell text-center ">0,246</div>
                        <div class="table-cell text-center ">0,060</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center py-2">PK</div>
                        <div class="table-cell text-center ">0,015</div>
                        <div class="table-cell text-center ">0,032</div>
                        <div class="table-cell text-center ">0,100</div>
                        <div class="table-cell text-center ">0,147</div>
                        <div class="table-cell text-center ">0,036</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell text-center py-2">Total</div>
                        <div class="table-cell text-center "></div>
                        <div class="table-cell text-center "></div>
                        <div class="table-cell text-center "></div>
                        <div class="table-cell text-center ">4,119</div>
                        <div class="table-cell text-center "></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-[800px]"></div>
    </div>
@endsection
