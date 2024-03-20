<div class="text-start fixed inset-0 bg-black bg-opacity-0 flex justify-center items-center -z-20 text-black">
    <div id="BoxAlamat<?= $location["id"] ?>" class="alamat-wrapper opacity-0 bg-white xl:w-[30%] lg:w-[50%] md:w-[70%] w-[90%] h-fit">
        <div class="p-4">
            <h6>Informasi User</h6>
        </div>
        <hr />
        <div class="flex flex-col gap-3 p-4">
            <div class="flex justify-between items-center">
                <h6 class="md:text-base text-xs capitalize">
                    <?= $location["user_username_location"] ?> <br />
                    <span class="font-light md:text-sm text-xs">(<?= $location["user_phone_location"] ?> )</span>
                </h6>
                <a id="UbahAlamatToggle-Feat" type="button" class="cursor-pointer md:text-sm text-xs text-blue-Neru font-semibold">
                    <h6>Ubah</h6>
                </a>
            </div>
            <div class="w-[80%]">
                <h6 class="md:text-sm text-xs font-light capitalize"><?= $location["user_location"] ?></h6>
            </div>
        </div>
        <hr />
        <div class="flex items-center justify-end p-4">
            <button class="outline outline-[1px] outline-slate-200 md:text-sm text-xs px-9 py-2 font-semibold capitalize hover:bg-blue-Neru hover:text-white closeBox cursor-pointer">Tutup</button>
        </div>
    </div>
    <div id="Feat-UbahAlamat" class="hidden relative bg-white 3xl:w-[30%] 2xl:w-[40%] lg:w-[50%] md:w-[60%] w-[90%] h-[60%] overflow-y-auto rounded-md lg:px-10 lg:py-4 p-6">
        <h5 class="font-semibold text-center lg:text-lg md:text-base text-sm">Ubah Alamat</h5>
        <span class="absolute top-5 lg:right-9 right-5 closeBoxFeatUbahAlamat">
            <svg xmlns="http://www.w3.org/2000/svg" class="md:w-6 w-5 text-red-600 cursor-pointer" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M18 6l-12 12" />
                <path d="M6 6l12 12" />
            </svg>
        </span>
        <form class="flex flex-col justify-center gap-6" action="" method="POST">
            <label class="flex flex-col gap-1.5 font-medium md:text-sm text-xs" for="">Pinpoint
                <div class="border-[1px] p-3 flex justify-between w-full bg-white shadow-md rounded-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="md:w-5 w-4" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M18.364 4.636a9 9 0 0 1 .203 12.519l-.203 .21l-4.243 4.242a3 3 0 0 1 -4.097 .135l-.144 -.135l-4.244 -4.243a9 9 0 0 1 12.728 -12.728zm-6.364 3.364a3 3 0 1 0 0 6a3 3 0 0 0 0 -6z" stroke-width="0" fill="currentColor" />
                    </svg>
                    <a href="" class="text-blue-Neru font-medium">Ubah</a>
                </div>
            </label>
            <label class="flex flex-col gap-1.5 font-medium md:text-sm text-xs" for="">Nama Lengkap
                <input type="text" class="border-[1px] w-full outline-none rounded-md shadow-md p-3  md:text-sm text-xs" value="<?= $location["user_username_location"] ?>" placeholder="Cth : Immanuel" />
            </label>
            <label class="flex flex-col gap-1.5 font-medium md:text-sm text-xs" for="">Nomor Telephone
                <input type="text" class="border-[1px] outline-none rounded-md w-full shadow-md p-3  md:text-sm text-xs" value="<?= $location["user_phone_location"] ?>" placeholder="Cth : Immanuel" />
            </label>
            <label class="flex flex-col gap-1.5 font-medium md:text-sm text-xs" for="">Label Alamat
                <select class="border-[1px] outline-none rounded-md shadow-md p-3 md:text-sm  text-xs">
                    <option value="Rumah">Rumah</option>
                    <option value="Kantor">Kantor</option>
                    <option value="Ruko">Ruko</option>
                </select>
            </label>
            <label class="flex flex-col gap-1.5 font-medium md:text-sm text-xs" for="">Alamat Lengkap
                <textarea name="" placeholder="Cth : Jalan  dukuh 3 no 106 , Tanggerang , Karawaci Baru" class="shadow-md  md:text-sm text-xs border-[1px] outline-none rounded-md p-3" id="" cols="10" rows="5"><?= $location["user_location"] ?></textarea>
            </label>
            <label class="flex flex-col gap-1.5 font-medium md:text-sm text-xs" for="">Catatan Untuk Kurir (Opsional)
                <input type="text" class="border-[1px] outline-none rounded-md shadow-md p-3  md:text-sm text-xs" placeholder="Cth : Rumah Hijau Besar Spanduk pecel lele" />
            </label>
            <button type="submit" class="bg-blue-Neru px-6 py-2 w-fit text-white-neru font-semibold self-end rounded-md md:text-base text-xs">Simpan</button>
        </form>
    </div>
</div>