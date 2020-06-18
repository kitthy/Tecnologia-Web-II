@csrf 
                    <div class="form-group">
                            <label for="taller">Taller</label>
                                    <input class="form-control border-0 bg-light shadow-sm"
                                    id="taller"
                                    type="text"
                                    name="title" 
                                    value="{{ old('title', $project->title)}}">
                            
                    </div>

                    <div class="form-group">
                                <label for="informacion">
                                    Informacion<br>
                                    <textarea class="form-control border-0 bg-light shadow-sm"
                                    name="description"
                                    >{{ old('description', $project->description)}}
                                    </textarea>
                            </label>
                    </div>
       
<button class="btn btn-primary btn-lg btn-block">{{ $btnText }}</button>
