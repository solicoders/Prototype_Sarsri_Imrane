<div class="card-body table-responsive p-0">
    <table class="table table-striped text-nowrap table-tasks">
        <thead>
            <tr>
                <th>Numéro de groupe</th>
                <th>années scolaires</th>
                <th>Référence</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>


            @include('Groups.search')

        </tbody>
        <input type="hidden" id='page' value="1">
    </table>
</div>
