<!-- New certificate request form -->
<form action="{!! route('certificates.create') !!}" method="get" class="new-certificate-form">

    @csrf

    <div class="input-group">
        <input type="text" name="id_card_number" class="form-control" placeholder="ID Card Number..." required/>
        <span class="input-group-btn">
                                <button type='submit' name='search' id='search-btn' class="btn btn-primary pull-right">Add New
                                </button>
                            </span>
    </div>
</form>
