  $(".logout").click(function(e){
         e.preventDefault();
         var log = $(this).attr('href');
         Swal.fire({
          title: 'Yakin ?',
          text: "Kamu Akan Keluar ?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#00cc00',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya'
      }).then((result) => {
          if (result.isConfirmed) {
            window.location = log;

        }
    })
  })


   $(".btn1").click(function(e){
         e.preventDefault();
         var hapus = $(this).attr('href');
         Swal.fire({
          title: 'Yakin ?',
          text: "Kamu Akan Menghapus Data",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#00cc00',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya'
      }).then((result) => {
          if (result.isConfirmed) {
            window.location = hapus;

        }
    })
  })


   $(".logout").click(function(e){
         e.preventDefault();
         var log = $(this).attr('href');
         Swal.fire({
          title: 'Yakin ?',
          text: "Kamu Akan Menghapus Keluar",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#00cc00',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya'
      }).then((result) => {
          if (result.isConfirmed) {
            window.location = log;

        }
    })
  })    