use PDF;
...

public function pdf($id) {
      $data = [
          "id" => $id,
      ];
      $pdf = PDF::loadView('test_pdf',$data);
      return $pdf->stream('test.pdf'); //แบบนี้จะ stream มา preview
      //return $pdf->download('test.pdf'); //แบบนี้จะดาวโหลดเลย
}