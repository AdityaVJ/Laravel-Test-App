<tr>
    <td></td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->phone }}</td>
    <td>{{ $student->email }}</td>
    <td>
        <form wire:submit.prevent="submitForm" key="{{ $student->id }}">
            {{--            @csrf--}}
            {{-- id="frm-logout" action="{{ route('counsellor.student.status', ['counsellor'=> Auth::user()->id, 'student' => $student->id ]) }}" method="POST"--}}
            <select class="form-control select" id="status" name="status">
                <option
                    value="Prospective">
                    Prospective
                </option>
                <option
                    value="Interested">
                    Interested
                </option>
                <option
                    value="Not Interested">
                    Not Interested
                </option>
                <option
                    value="Call Again">
                    Call Again
                </option>
                <option
                    value="Full Admission">
                    Full Admission
                </option>
                <option
                    value="Provisional Admission">
                    Provisional Admission
                </option>
                <option
                    value="Drop Out">
                    Drop Out
                </option>
            </select>
            <br>
            <button type="submit" class="btn btn-info btn-wd">
                {{--            <button wire:click="updateStatus">--}}
                Update Status
            </button>
        </form>
    </td>
    <td>
        <a rel="tooltip" title="View" class="btn btn-link btn-info table-action view"
           href="#"> <i class="fa fa-image"></i></a>
    </td>
</tr>
