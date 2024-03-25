<div id="popupLocationsUpdate<?= $location["id"] ?>" class="fixed hidden  bg-black bg-opacity-50 z-50 inset-0 items-center justify-center">
    <form action="Profile.php" method="POST">
        <div class="boxinput-userLocations relative flex p-4 flex-col gap-4 md:w-[650px] w-[340px] bg-white-neru rounded-lg">
            <label for="">Reciver Name</label>
            <input type="hidden" name="id" value="<?= $location["id"] ?>">
            <input placeholder="Cth : immanuel Christian" value="<?= $location["user_username_location"] ?>" type="text" class="bg-white shadow-md border-2 rounded-lg border-opacity-20 border-black w-full p-2 outline-none" name="user_username-location">
            <label for="">Phone number reciver</label>
            <input placeholder="Cth : 081314801945" value="<?= $location["user_phone_location"] ?>" type="text" class="bg-white shadow-md border-2 rounded-lg border-opacity-20 border-black w-full p-2 outline-none" name="user_phone-location">
            <textarea placeholder="Cth : Jalan Kakap raya no 155" name="user_location" class="bg-white border-2 rounded-lg border-opacity-20 border-black shadow-md w-full p-2 outline-none" id="" cols="30" rows="10"><?= $location["user_location"] ?></textarea>
            <button type="submit" name="submitLocationUpdate" class="bg-blue-Neru px-3.5 py-1.5 rounded-lg w-fit text-white font-semibold text-sm self-end">Update Alamat</button>
            <div id="CloseLocationsUpdate" class="cursor-pointer w-10 h-10 text-white font-semibold rounded-br-none bg-blue-Neru rounded-tr-none rounded-full flex items-center justify-center absolute top-0 right-0">
                X
            </div>
        </div>
    </form>
</div>