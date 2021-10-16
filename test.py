from happytransformer import HappyTextClassification

happy_tc = HappyTextClassification("BERT", "Hate-speech-CNERG/dehatebert-mono-english")

result = happy_tc.classify_text("You are a bad guy. You fuck people")
print(result)
print(result.label)
print(result.score)