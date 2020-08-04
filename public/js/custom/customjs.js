

$("#scoring").validate({
    rules: {
        name: {
            required: true,
            maxlength: 50
        },
        age: {
            required: true,
            maxlength: 2,
            min: 5
        },
        gender: {
            required: true
        },
        phone: {
            required: false,
            number: true,
        },
        email: {
            required: true,
            email: true,
            maxlength: 30
        },
        shouldfixed: {
            required: true,
            maxlength: 100
        },
        goodthings: {
            required: true,
            maxlength: 100
        },
        ordertype: {
            required: true,
            maxlength: 100
        },
        foodordered: {
            required: true,
            maxlength: 100
        },
        foodsatisfaction: {
            required: true
        },
        drinkordered: {
            required: true,
            maxlength: 100
        },
        drinksatisfaction: {
            required: true
        },
        favoritefood: {
            required: true,
            maxlength: 100
        },
        favoritedrink: {
            required: true,
            maxlength: 100
        },
        menusuggestion: {
            required: true,
            maxlength: 100
        },
        price: {
            required: true
        },
        howoften: {
            required: true
        },
        references: {
            required: true
        },
        promo: {
            required: true
        },
        distance: {
            required: true
        },
        stafffriendliness: {
            required: true
        },
        servicequality: {
            required: true
        },
        outletcleanliness: {
            required: true
        },
    },
    messages: {
        name: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 50 karakter.'
        },
        age: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 2 karakter.',
            min: 'Minimum umur 5 tahun.'
        },
        gender: {
            required: 'Jenis kelamin harus dipilih.'
        },
        phone: {
            number: 'Bagian ini wajib diisi dengan angka saja.',
        },
        email: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 30 karakter.',
            email: 'Format penulisan e-mail salah.',
        },
        shouldfixed: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 100 karakter.'
        },
        goodthings: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 100 karakter.'
        },
        ordertype: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 100 karakter.'
        },
        foodordered: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 100 karakter.'
        },
        foodsatisfaction: {
            required: 'Bagian ini wajib dipilih.'
        },
        drinkordered: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 100 karakter.'
        },
        drinksatisfaction: {
            required: 'Bagian ini wajib dipilih.'
        },
        favoritefood: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 100 karakter.'
        },
        favoritedrink: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 100 karakter.'
        },
        menusuggestion: {
            required: 'Bagian ini wajib diisi.',
            maxlength: 'Maksimum 100 karakter.'
        },
        price: {
            required: 'Bagian ini wajib dipilih.'
        },
        howoften: {
            required: 'Bagian ini wajib dipilih.'
        },
        references: {
            required: 'Bagian ini wajib dipilih.'
        },
        promo: {
            required: 'Bagian ini wajib dipilih.'
        },
        distance: {
            required: 'Bagian ini wajib dipilih.'
        },
        stafffriendliness: {
            required: 'Bagian ini wajib dipilih.'
        },
        servicequality: {
            required: 'Bagian ini wajib dipilih.'
        },
        outletcleanliness: {
            required: 'Bagian ini wajib dipilih.'
        },
    },
    errorPlacement: function(error, element) {
    error.insertAfter(element.parent());
    },

    
})

