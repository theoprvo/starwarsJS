function change() {

    select = document.getElementById("select");
    select_s = select.style; //POUR APPLIQUER LE STYLE AU SELECT

    switch(select.selectedIndex) {

        case 0 :
            select_s.background = "url('img/pdp/guest_1.jpg') no-repeat center"; //DEFINIS LE BACKGROUND DU SELECT
            break; //POUR SORTIR DU CAS

        case 1 :
            select_s.background = "url('img/pdp/guest_2.jpg') no-repeat center";
            break;

        case 2 :
            select_s.background = "url('img/pdp/guest_3.jpg') no-repeat center";
            break;

        default:
            select_s.background = "url('img/pdp/guest_1.jpg') no-repeat center";
            break;
    }
}