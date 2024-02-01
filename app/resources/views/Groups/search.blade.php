@foreach ($Groups as $Group)
    <tr>
        <td>{{ $Group->name }}</td>
        <td>{{ $Group->project->name }}</td>
        <td>{{ $Group->description }}</td>
        <td class="d-flex">
            <a href="{{ route('groupes.show', ['groupe' => $Group]) }}" class="btn btn-sm btn-default">
                <i class="fa-solid fa-eye"></i>
            </a>
            <a href="{{ route('groupes.edit', ['groupe' => $Group]) }}" class="btn btn-sm btn-default mx-2">
                <i class="fa-solid fa-pen-to-square"></i>
            </a>
            <form action="{{ route('groupes.destroy', ['groupe' => $Group]) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-sm btn-danger">
                    <i class="fa-solid fa-trash"></i>
                </button>
            </form>
        </td>
    </tr>
@endforeach
<tr>
    <td></td>
    <td></td>
    <td></td>
    <td>
        <div class=" pagination m-0 float-right">
            {{ $Groups->links() }}
        </div>
    </td>
</tr>
