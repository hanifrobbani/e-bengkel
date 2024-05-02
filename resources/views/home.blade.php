@extends('main.navbar')

@section('container')

<div class="container-fluid">
  <div class="row">
    <div class="col">
      <h5>
        <span class="badge text-bg-primary">New</span>
        Perbarui mesin kendaraan anda!
      </h5>
      <h1 class="text-primary">E-Bengkel</h1>
      <h1>Solusi Terbaik untuk Perawatan Kendaraanmu!</h1>
      <p class="fs-5">Kami menyediakan beragam suku cadang dan kebutuhan lainnya untuk memenuhi kebutuhan kendaraan Anda!</p>
      <button type="button" class="btn btn-primary">Shop Now</button>
      <button type="button" class="btn btn-outline-primary">More Information</button> 
    </div>
    <div class="col d-flex justify-content-center">
    
      <svg xmlns="http://www.w3.org/2000/svg" width="350" height="300" viewBox="0 0 523.04835 492.57438" xmlns:xlink="http://www.w3.org/1999/xlink"><g><path id="uuid-2dbd2d67-52d2-45fe-b410-d6387c9b42a0-371" d="m246.34712,214.19614c-2.63932-5.83053-1.64618-11.93478,2.21779-13.63395,3.86397-1.69918,9.13465,1.65001,11.7741,7.48298,1.08763,2.3154,1.58189,4.8603,1.44142,7.4218l10.85807,24.84711-12.24619,4.91569-9.40397-25.01674c-2.02821-1.60834-3.6197-3.67154-4.64121-6.01688Z" fill="#ffafaf"/><path d="m321.38706,224.74626l.00002.00002c6.61976,6.24211,6.20514,16.89206-.87988,22.60062l-34.69564,27.955c-3.78661,3.05095-9.40634,1.97299-11.79527-2.26258-9.11786-14.76137-10.83666-15.57092-16.13599-30.69972l14.94432-5.22741,8.42612,10.55088,18.39678-21.70243c5.55997-6.55902,15.48367-7.11336,21.73955-1.21438Z" fill="#53acfe"/></g><rect x="127.42919" y="127" width="11" height="109" transform="translate(314.42919 48.57081) rotate(90)" fill="#dfdfdf"/><rect x="403.42919" y="127" width="11" height="109" transform="translate(590.42919 -227.42919) rotate(90)" fill="#dfdfdf"/><g><rect x="107.08952" y="138.00769" width="44.80769" height="94.99231" rx="13.08619" ry="13.08619" fill="#3f3d56"/><rect x="401.02798" y="138.00769" width="44.80769" height="94.99231" rx="13.08619" ry="13.08619" fill="#3f3d56"/><path d="m420.93787,209.7H136.33792c-9.89445,0-18.36087-7.06596-20.13086-16.80026l-10.88381-59.86115c-4.73325-26.03309,5.07412-52.55627,25.59968-69.24626l21.46109-46.1738c4.97457-10.70309,15.81528-17.61852,27.61777-17.61852h160.31615c8.52265,0,16.71099,3.60562,22.46598,9.8927l39.43471,43.08627c28.85064,19.44146,45.21814,53.06561,42.72177,87.76794l-3.59446,49.96058c-.76619,10.6497-9.73036,18.99251-20.40807,18.99251Z" fill="#dfdfdf"/><path d="m372.36681,59.59423h-215.01873c-3.73427,0-7.18017-1.86845-9.21774-4.99711-2.03757-3.12954-2.3524-7.03708-.84189-10.45192l11.33341-25.62352c1.72492-3.89967,5.59374-6.46999,9.85594-6.54787l183.29715.22316c3.4901-.02275,6.82289,1.54814,8.939,4.31274l20.38816,25.40036c2.56222,3.34832,2.99389,7.77571,1.12676,11.55636-1.86713,3.77977-5.64603,6.1278-9.86207,6.1278Z" fill="#fff"/><circle cx="404.6126" cy="108.43462" r="18.81923" fill="#fff"/><circle cx="157.27414" cy="108.43462" r="18.81923" fill="#fff"/><path d="m386.24145,178.78269h-205.21923v-.44808c0-10.62432,8.6432-19.26731,19.26731-19.26731h166.68462c10.62411,0,19.26731,8.64298,19.26731,19.26731v.44808Z" fill="#3f3d56"/><path d="m133.93913,67.73925c-1.11057,0-2.22332-.35356-3.15754-1.06768l-7.51382-5.74449c-.74607-.5706-1.67438-.88478-2.61407-.88478h-16.40885c-1.87742,0-3.55989-.96967-4.50046-2.59482-.94057-1.62428-.94407-3.56624-.00941-5.19402l4.00578-6.97845c.80011-1.39411,2.22901-2.35328,3.82266-2.56594l20.52971-2.73747c2.55872-.33956,4.94088,1.20683,5.67316,3.67826l5.15967,17.41374c.56819,1.91745-.02757,4.01781-1.51795,5.35242-.98214.87865-2.22398,1.32323-3.46888,1.32323Z" fill="#dfdfdf"/><path d="m400.16684,64.15464c-1.2449,0-2.48652-.44458-3.46888-1.32323-1.49016-1.3346-2.08592-3.43496-1.51795-5.35242l5.15967-17.41374c.73228-2.47317,3.11838-4.02482,5.67316-3.67738l20.52993,2.73659c1.59343.21266,3.02233,1.17183,3.82244,2.56594l4.00578,6.97845c.93466,1.62778.93116,3.56974-.00941,5.19402-.94057,1.62515-2.62304,2.59482-4.50046,2.59482h-16.40885c-.93969,0-1.86801.31418-2.61407.88478l-7.51382,5.74449c-.934.71412-2.0472,1.06768-3.15754,1.06768Z" fill="#dfdfdf"/></g><rect x="78.42919" y="34" width="11" height="451" fill="#dfdfdf"/><rect x="458.42919" y="34" width="11" height="451" fill="#dfdfdf"/><path d="m0,485.4387c0,.34284.27531.61812.61815.61812h521.81208c.34281,0,.61812-.27528.61812-.61812,0-.34281-.27531-.61812-.61812-.61812H.61815c-.34284,0-.61815.27531-.61815.61812Z" fill="#3f3d56"/><polygon points="344.54033 451.32356 344.54033 471.75166 359.98597 472.24991 359.3424 451.32356 344.54033 451.32356" fill="#ffafaf"/><path d="m341.48371,462.69029c-.20874,0-.4131.02676-.61162.0832-2.78755.79651-18.92315,15.20236-23.80197,19.59851-.60286.54301-.92302,1.3186-.87874,2.12777.04379.80576.44472,1.53804,1.09916,2.00904,3.70036,2.66494,11.28061,6.88057,20.47822,5.17709,4.23072-.78386,8.50036-1.27676,12.26737-1.71126,8.06439-.93129,14.43406-1.6665,14.43406-4.5212,0-4.84379-1.33223-17.6099-3.00408-18.1461-.15181-.04622-.32746.07104-.52987.35422-2.55789,3.58066-11.34387,1.67526-11.71658,1.59303l-.0978-.0219-.05547-.0832c-.04574-.06861-4.34749-6.4592-7.58269-6.4592Z" fill="#2f2e41"/><polygon points="315.64204 451.32356 315.64204 471.75166 331.08768 472.24991 330.44411 451.32356 315.64204 451.32356" fill="#ffafaf"/><polygon points="309.41395 305.08822 301.19289 311.3163 299.69815 381.56905 313.64905 458.29901 331.83505 459.04638 332.33329 385.80415 355.75088 319.03912 351.01754 303.34436 309.41395 305.08822" fill="#2f2e41"/><polygon points="347.77893 317.04613 355.75088 319.03912 361.48071 458.29901 340.80348 456.55515 327.1017 358.15147 347.77893 317.04613" fill="#2f2e41"/><path d="m304.61444,492.57438c-7.08785,0-12.84688-3.13302-15.92248-5.24521-.92935-.63838-1.50447-1.65141-1.57794-2.77977-.07445-1.13857.36931-2.22849,1.2174-2.99143,7.63378-6.86743,20.83926-18.50178,23.50517-19.26326,3.45513-.99017,8.09213,5.61744,8.68866,6.49375.96535.19755,8.87502,1.70883,11.10691-1.41689.42575-.59556.82522-.62232,1.08748-.53863,2.38516.7644,3.35051,16.11905,3.35051,18.6205,0,3.29894-6.23927,4.01906-14.8749,5.01604-3.75923.43402-8.02011.92594-12.23429,1.70591-1.49377.27686-2.94617.39899-4.34652.39899Z" fill="#2f2e41"/><polygon points="326.4968 214.09426 332.17178 225.52724 310.72266 235.88631 310.98545 217.55787 326.4968 214.09426" fill="#ffafaf"/><circle cx="310.79953" cy="203.44273" r="19.30022" fill="#ffafaf"/><path d="m310.66888,231.42912l19.78968-11.6939h0l.00002.00002c14.51448,10.17899,26.60137,12.56036,26.9859,30.28418l-2.67498,42.27794.15677,18.20804c.06581,7.64367-6.11231,13.87522-13.75627,13.87522h-28.25871c-7.4783,0-13.04995-6.89947-11.47535-14.21012l5.33498-24.76954-5.69703-48.27482,9.59499-5.69703Z" fill="#53acfe"/><path d="m330.64672,213.15365l-3.56833,2.55642s-1.05008-11.14186-2.49886-11.6363-3.40351,2.0735-3.40351,2.0735l-1.42752,4.18283-4.72026-1.96755s-5.4655-2.94361-7.39721-3.60286c-1.93171-.65925-1.63892-6.25675-1.63892-6.25675,0,0-23.18971,3.17499-19.70561-10.19367,0,0,1.19974-9.83487,3.76768-7.88014,2.56794,1.95473,2.60247-2.88605,2.60247-2.88605l5.81815-1.24943s7.98375-10.75467,23.73251-1.60573c15.74876,9.14895,8.43942,38.46572,8.43942,38.46572Z" fill="#2f2e41"/><path d="m290.3681,255.87454l-5.21382-.79431c-1.45582-.22179-2.46559-1.59446-2.24379-3.05034l.63719-4.18246c-1.89237,1.16941-3.28117,3.12673-3.64246,5.49818-.55742,3.65884,1.50974,7.10448,4.79034,8.44632l-4.56206,29.94508c-.01144.07512-.00896.14871-.01113.22291-3.54128.29432-6.55274,2.97213-7.11138,6.639-.32745,2.14937.24982,4.22743,1.44633,5.8486l.57393-3.76726c.2218-1.45587,1.59452-2.46558,3.05034-2.24379l5.21382.79431c1.45582.22179,2.46559,1.59446,2.24379,3.05034l-.63719,4.18246c1.89237-1.16941,3.28117-3.12673,3.64246-5.49818.55864-3.66687-1.51879-7.11996-4.81178-8.45546.02002-.07148.04431-.14099.05575-.21611l4.56206-29.94508c3.53135-.30405,6.53078-2.97781,7.0882-6.63665.32745-2.14937-.24982-4.22743-1.44633-5.8486l-.57393,3.76726c-.2218,1.45587-1.59452,2.46558-3.05034,2.24379Z" fill="#3f3d56"/><g><path id="uuid-610469c6-e523-485c-9269-d5059242b223-372" d="m280.65661,281.92954c-6.25671-1.34713-10.57245-5.77685-9.63955-9.89355.9329-4.11669,6.76051-6.3608,13.01925-5.01233,2.50814.5032,4.84777,1.61989,6.82312,3.25665l26.43154,6.05397-3.33409,12.76781-25.70284-7.32368c-2.49937.67346-5.10454.72529-7.59743.15112Z" fill="#ffafaf"/><path d="m333.77832,227.88899h.00003c8.95551-1.6075,17.26925,5.06148,17.64286,14.15244l1.82956,44.51879c.19967,4.85869-4.00998,8.73452-8.8357,8.13498-17.2894-1.45269-16.07482.3181-31.3879-4.4225l1.0255-16.2727,14.26885-.21626-6.50003-27.69813c-1.96447-8.37107,3.4936-16.67749,11.95683-18.19662Z" fill="#53acfe"/></g></svg>
    </div>
  </div>
</div>

@endsection