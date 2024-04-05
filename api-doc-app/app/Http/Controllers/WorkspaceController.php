<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Workspace;
use App\Models\Collection;
use App\Models\User;
use App\Models\History;
use Session;


class WorkspaceController extends Controller
{
    public function index($id){
        $data['workspaces'] = Workspace::get()->all();
        $data['selectedWorkspace'] = Workspace::find($id);

        if (!$data['selectedWorkspace']) {
            return redirect()->route('home.index')->with('error', 'Workspace not found');
        }
        session(['selected_workspace_id' => $id]);

        return view('workspace', $data);
    }

    public function create() {
        $data['workspaces'] = Workspace::orderBy('id','desc')->paginate(5);
        return view('create', $data);
    }

    public function store(Request $request){
        $request->validate([
            'workspace-input-name' => 'required',
            'access' => 'required'
        ]);
        $user = auth()->user() ;

        $workspace = new Workspace;
        $workspace->name = $request->input('workspace-input-name');
        $workspace->access = $request->input('access');

        if($user) {
            $workspace->user_create = $user->id;
        }

        $workspace->save();
        return redirect()->route('home.index')->with('success','Workspace has been created succesfully');
    }

    public function collections(Request $request) {
        $selectedWorkspaceId = $request->session()->get('selected_workspace_id');
        $selectedWorkspace = Workspace::find($selectedWorkspaceId);

        if (!$selectedWorkspace) {
            return redirect()->route('home.index')->with('error', 'Workspace not found');
        }

        $data = $request->session()->all();
        $data['workspaces'] = Workspace::get()->all();
        $data['selectedWorkspace'] = $selectedWorkspace;
        $data['collections'] = Collection::all();

        return view('collection', $data);
    }

    public function createCollection(Request $request) {
        $selectedWorkspaceId = $request->session()->get('selected_workspace_id');
        $collection_workwspace_id = Workspace::find($selectedWorkspaceId) ->id;

        $CollectionModel = new Collection();

        $CollectionModel -> name = 'New Collection';
        $CollectionModel -> status = 'Activated';
        $CollectionModel -> workspace_id = $collection_workwspace_id;

        $CollectionModel -> save();

        return redirect()->back();
    }

    public function saveCollection(Request $request) {
        $selectedWorkspaceId = $request->session()->get('selected_workspace_id');
        $collection_workwspace_id = Workspace::find($selectedWorkspaceId) ->id;

        $selectedCollectionId = $request->session()->get('selected_collection_id');
        $collection_id = collection::find($selectedCollectionId) ->id;

        $HistoryModel = new History();

        $HistoryModel -> history_id = $selectedCollectionId;
        $HistoryModel -> name = $collections -> name;
        $HistoryModel -> status = 'Inactive';
        $HistoryModel -> workspace_id = $collection_workwspace_id;

        $HistoryModel -> save();

        return redirect()->back();
    }

    public function history(Request $request, $id) {
        $selectedWorkspaceId = $request->session()->get('selected_workspace_id');
        $selectedWorkspace = Workspace::find($selectedWorkspaceId);

        $data['selectedCollection'] = collection::find($id);
        session(['selected_collection_id' => $id]);

        if (!$selectedWorkspace) {
            return redirect()->route('home.index')->with('error', 'Workspace not found');
        }

        $data = $request->session()->all();
        $data['workspaces'] = Workspace::get()->all();
        $data['selectedWorkspace'] = $selectedWorkspace;

        return view('history', $data);
    }

    public function trash(Request $request) {
        $selectedWorkspaceId = $request->session()->get('selected_workspace_id');
        $selectedWorkspace = Workspace::find($selectedWorkspaceId);

        if (!$selectedWorkspace) {
            return redirect()->route('home.index')->with('error', 'Workspace not found');
        }

        $data = $request->session()->all();
        $data['workspaces'] = Workspace::get()->all();
        $data['selectedWorkspace'] = $selectedWorkspace;

        return view('trash', $data);
    }

    public function addToCollectionTabs(Request $request, $id) {
        if ($request->session()->has('collection_tabs')) {
            $collection_tabs = $request->session()->get('collection_tabs');

            if (!in_array($id, array_column($collection_tabs, 'id'))) {
                $collection = Collection::find($id);
                $collection_tabs[] = $collection;
            }
        } else {
            $collection_tabs = [];
            $collection_tabs[] = $collection;
        }

        $request->session()->put('collection_tabs', $collection_tabs);

        return redirect()->back();
    }

    public function deleteFromCollectionTabs(Request $request,$id) {
        if ($request->session()->has('collection_tabs')) {
            $collection_tabs = $request->session()->get('collection_tabs');
            foreach ($collection_tabs as $index => $collection) {
                if ($collection->id == $id) {
                    unset($collection_tabs[$index]);
                    break;
                }
            }
            $request->session()->put('collection_tabs', $collection_tabs);
        }
        return redirect()->back();
    }
}
