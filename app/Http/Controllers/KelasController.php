<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kelas;

class KelasController extends Controller
{
    function create(Request $request) {
        try {
            $validator = \Validator::make($request->all(),[
                'nama_kelas' => 'required|unique:kelas,nama_kelas',
            ]);

            if($validator->fails()) {
                $response = [
                    "success" => false,
                    "message" => $validator->errors()
                ];
            return response()->json($response, 400);
            }

            $dataToCreate = [
                "nama_kelas" => $request->nama_kelas,
            ];

            $kelas = Kelas::create($dataToCreate);

            $response = [
                "success" => true,
                "data" => $response,
            ];

            return response()->json($response, 200);
        } catch (\Exception $th) {
            $response = [
                "success" => false,
                "message" => $error->getMessage()
            ];
            return response()->json($response, 500);
        }
    }

    function list(Request $request) {
        // listData adalah static function yang di buat di dalam model user
        $data = Kelas::all();

        $response = [
            "success" => true,
            "data" => $data
        ];

        return response()->json($response, 200);
    }

    function read(Request $request) {
        // error handling
        try {
            // validate
            $validator = \Validator::make($request->all(), [
                'id_kelas' => 'required|exists:kelas,id_kelas'
            ]);

            // validator error handling
            if ($validator->fails()) {
                // validator error response
                $response = [
                    "success" => false,
                    "message" => $validator->errors()
                ];

                // validator error result
                return response()->json($response, 400);

            }

            // get data with eloquent
            $kelas = Kelas::where('id_kelas', $request->id_kelas)->first();

            // success response
            $response = [
                "success" => true,
                "kelas" => $kelas,
            ];

            // success result
            return response()->json($response, 200);

        } catch (\Exception $error) {
            // error response
            $response = [
                "success" => false,
                "message" => $error->getMessage()
            ];

            // error result
            return response()->json($response, 500);

        }
    }

    function update(Request $request) {
        // error handling
        try {
            // validate
            $validator = \Validator::make($request->all(), [
                'id_kelas' => 'required|exists:kelas,id_kelas',
                'nama_kelas' => 'required|unique:kelas,nama_kelas',
            ]);

            // validator error handling
            if ($validator->fails()) {
                // validator error response
                $response = [
                    "success" => false,
                    "message" => $validator->errors()
                ];

                // validator error result
                return response()->json($response, 400);
            }

            // get data with eloquent
            $kelas = Kelas::where('id', $request->id)->first();

            // update data with eloquent
            $kelas->update($request->all());

            // success response
            $response = [
                "success" => true,
                "data" => $kelas
            ];

            // success response
            return response()->json($response, 200);
            
        } catch (\Exception $error) {
            // error response
            $response = [
                "success" => false,
                "message" => $error->getMessage()
            ];

            // error result
            return response()->json($response, 500);
        }
    }

    function delete(Request $request) {
        try {
            $validator = \Validator::make($request->all(),[
                'id_kelas' => 'required|exists:kelas,id_kelas',
            ]);
            if($validator->fails()) {
                $response = [
                    "success" => false,
                    "message" => $validator->errors()
                ];
                return response()->json($response, 400);
            }

            $kelas = Kelas::where('id', $request->id)->first();
            $kelas->delete();
            
            $response = [
                "success" => true,
                "message" => "Class deleted successfully"
            ];
            return response()->json($response, 200);
        } catch (\Exception $error) {
            $response = [
                "success" => false,
                "message" => $error->getMessage()
            ];
            return response()->json($response, 500);
        }
    }
}
