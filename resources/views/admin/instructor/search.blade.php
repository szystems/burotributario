
                <form action="{{ url('instructors') }}" method="GET">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 mb-0">
                            <label for=""><strong>{{ __('Buscar') }} {{ __('Instructores') }}:</strong></label>

                        </div>
                        <div class="col-md-6 mb-3">

                            <input class="form-select px-2" list="instructorsListOptions" placeholder="{{ __('Buscar') }}..." name="finstructor" value="{{ $queryInstructor }}">
                            <datalist id="instructorListOptions">
                                <option value="">{{ __('All') }}</option>
                                @if ($queryInstructor != null)
                                    <option selected value="{{ $queryInstructor }}" >{{ $queryInstructor }}</option>
                                @endif
                                @foreach ($filterInstructors as $item)
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                @endforeach
                            </datalist>
                            {{-- </select> --}}
                        </div>
                        <div class="col-md-2 mb-3" >
                            <button type="submit" class="btn btn-info"><i class="material-icons">search</i> {{ __('Buscar') }}</button>
                        </div>
                    </div>
                </form>
