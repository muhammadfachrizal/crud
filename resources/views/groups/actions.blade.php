{!! Form::open(['route' => ['groups.destroy', $post->id], 'method' => 'delete']) !!}
                        <a href="{!! route('groups.show', [$post->id]) !!}" class='btn btn-success btn-sm'><i class="glyphicon glyphicon-search"></i> Details</a>
                        <a href="{!! route('groups.edit', [$post->id]) !!}" class='btn btn-primary btn-sm'><i class="glyphicon glyphicon-edit"></i> Edit</a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i> Delete', ['type' => 'submit', 'class' => 'btn btn-danger btn-sm', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        {!! Form::close() !!}