<div id="userInfo<?= $user["user_id"] ?>" class="userChangesDetail container hidden z-10 transition-all ease-in-out duration-300 bg-blue-Neru absolute top-2 shadow-lg  translate-x-[48%]  text-white font-semibold w-[600px] h-[150px] rounded-lg">
    <div class="wrap flex flex-col gap-3 ">
        <div class="child-wrap">
            <h6>User Melakukan Registrasi (Date)</h6>
            <div class="flex gap-3 items-center">
                <h6><?= $user["user_username"] ?></h6> |
                <h6><?= $user["insert_date"] ?></h6>
            </div>
        </div>
        <hr>
        <div class="child-wrap">
            <h6>User Melakukan Update Data Terakhir (Date)</h6>
            <div class="flex gap-3 items-center">
                <h6><?= $user["user_username"] ?></h6> |
                <h6><?= $user["lastUpdate_date"] ?></h6>
            </div>
        </div>
        <div id="buttonClose" class="cursor-pointer w-8 h-8 absolute right-2 top-2 text-blue-Neru rounded-full p-3 text-base bg-white flex items-center justify-center">
            X
        </div>
    </div>
</div>