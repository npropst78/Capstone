/**
 * Created by Nick on 12/11/2014.
 */


function check() {

    if (document.add.title.value == "" || document.add.author.value == "" || document.add.content.value == "" || document.add.date.value == "") {

        alert("Some information wasn't added correctly, please check your work and resubmit the data.");

        return false;

    }
}